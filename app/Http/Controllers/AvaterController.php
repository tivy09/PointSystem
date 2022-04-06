<?php

namespace App\Http\Controllers;

use DB;
use App\avater;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
class AvaterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todayDate = date("Y-m-d");

        $avater = DB::table('avaters')
		->select('avaters.name as userProId', 'avaters.*')
        ->where('avaters.name', '=', Auth::user()->name)
        ->where('avaters.AttDate', '=', $todayDate)
        ->get();

        $count = DB::table('avaters')->select('avaters.name')
        ->where('avaters.name', '=', Auth::user()->name)
        ->where('avaters.AttDate', '=', $todayDate)->count();

        $user = User::all();
        
        return view('admin.CheckIn.show',compact('count'))->with('avaters',$avater)->with('usersaa',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CheckIn.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file=$request->file('avatar_file');
        $file->move('Avatar',$file->getClientOriginalName());
        $fileName=$file->getClientOriginalName(); 

        $user = User::find($id);
        $user->Avater = $fileName;
        $user->save();

        Toastr::success('Your Avatar already update!!','Success');
        return redirect()->route('user.information.show', ['id' => Auth::user()->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
