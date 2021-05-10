<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Point;
use App\Models\PointSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class OrderController extends Controller
{
    public function earnPoint(Request $request)
    {
        //get user id->detail
        $user = new User();
        $user->id = $request->user_id;
        $user = User::find($user->id);
        //point
        $point = new Point();
        //get order total
        $order = Order::find(4);
        //get point setting
        $pointSetting = PointSetting::all()->first();
        //calculate point earn amount
        $pointsEarn = $pointSetting->earn_rate * $order->total;
        $activate_date = new Carbon($pointSetting->point_activate_date);
        // return $user->point;
        if ($pointSetting->enable == 1) {
            //check point activate
            //if checked, status == 1 , active now
            if ($pointSetting->point_status == 0) {
                $pointActivateDate = $activate_date->addDays($pointSetting->point_activate_period);
                $pointExpiredDate = $pointActivateDate->addDays($pointSetting->point_period);
                if ($pointActivateDate->gt(now())) {
                    $point->pending_point = $pointsEarn;
                } elseif ($pointActivateDate->eq(now())) {
                    $point->activate_point = $pointsEarn;
                    $user->point += $point->activate_point;
                }
                $point->activate_date=$activate_date->addDays($pointSetting->activate_period);
                $point->expired_date=$pointExpiredDate;
            }else{
                //status == 1
                //points activated now
                $point->activate_point = $pointsEarn;
                $user->point += $point->activate_point;
            }
            // return $this->updatePoint($user->id);
            $point->user_id = $user->id;
            $point->save();
            $user->update();
            return response()->json(['sucsess'=>'Earn point sucessfully','order_total' => $order->total, 'point' => $point,'user'=>$user->name,$user->point], 200);
        }else{
            return response()->json(['success'=>'order completed'],200);
        }

    }
    public function updatePoint($id)
    {
        //update point by point id
        $point = Point::find($id);
        $activate_point = $point->activate_point;
        $user = User::find($point->user_id);
        $activate_date = new Carbon($point->activate_date);
        $expired_date = new Carbon($point->expired_date);
        // var_dump(now()->eq($activate_date));
        // var_dump($expired_date->gt(now()));
        if($activate_date->eq(now()) || now()->gt($activate_date)){
            $point->activate_point = $point->pending_point;
            $user->point += $point->activate_point;
            $point->pending_point = 0;
        }
        if($expired_date->eq(now()) || now()->gt($expired_date)){
            $point->expired_point += $activate_point;
            $user->point -= $activate_point;
            if($user->point < 0){
                $user->point = 0;
            }
        }
        $point->update();
        $user->update();
        return response()->json(['point' => $point,'user'=>$user], 200);
    }
    //todo havent done
    public function updatePointByUserId()
    {
        // return 1;
        //1. get user id
        //2. check each row with the same user id
        //3. update each row
        $user = User::find(2);
        // return $user;
        $points = Point::where('user_id',$user->id)->get();
        foreach($points as $point){
            $activate_point = $point->activate_point;
            $activate_date = new Carbon($point->activate_date);
            $expired_date = new Carbon($point->expired_date);
            if($activate_date->eq(now()) || now()->gt($activate_date)){
                $point->activate_point = $point->pending_point;
                $user->point += $point->activate_point;
                $point->pending_point = 0;
            }
            if($expired_date->eq(now()) || now()->gt($expired_date)){
                $point->expired_point += $activate_point;
                $user->point -= $activate_point;
                if($user->point < 0){
                    $user->point = 0;
                }
            }
            $point->update();
            $user->update();
        }
        return response()->json(['user'=>$user], 200);
    }
}
