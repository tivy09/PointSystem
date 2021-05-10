<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Prize;
use App\Models\User;
use App\Models\Point;
use App\Models\PointLog;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class RedeemController extends Controller
{
    /*
    * use point to redeem item
    *@bodyParam prize_id intger required
    */
    public function redeemPrize(Request $request)
    {
        //get user_id
        $userLog = User::find(2);
        //prize
        $prize = new Prize();
        $prizeId = $request->prize_id;
        $prize = Prize::find($prizeId);
        if($userLog->point > $prize->point_to_redeem){
            $log = new PointLog();
            $log->user_id=1;
            $log->type_id=1;
            $log->prize=$prize->id;
            $log->point_amount = $prize->point_to_redeem;
            $log->save();
            //deduct from user account active points
            $userLog->point -= $prize->point_to_redeem;
            $userLog->update();
            //deduct quantity from prize
            $prize->quantity-=1;
            $prize->save();
        }else{
            return response()->json([
                'msg'=>'Point not enough to redeem.',
            ]);
        }
        return response()->json([
            'msg'=>'Redeemed Successfully',
            'prize'=>$prize,
            'user'=>$userLog,
        ]);

    }
    public function allPrize()
    {
        $prize = Prize::all();
        return response()->json([
            'prize'=>$prize,
        ],200);
    }
}
