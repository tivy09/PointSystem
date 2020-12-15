<?php

namespace App\Http\Controllers;

use DB;
use App\Email;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\MassDestroyMeetingRequest;
use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use Gate;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmailController extends Controller
{
    private function getEmail($newEmail)
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email=DB::table('emails')
        ->select('emails.*')
        ->get();
        return view('user.emails.index')->with('emails', $email);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.emails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //store
        if ($r->file('Email_file')!='') {
            $file=$r->file('Email_file');
            $file->move('Email_File',$file->getClientOriginalName());
            $fileName=$file->getClientOriginalName();
        }else{
            $fileName='';
        }
        $addEmail=Email::create([
            'form_email'=>$r->form_email,
            'to_email'=>$r->to_email,
            'EmailSender'=>$r->EmailSender,
            'Email_title'=>$r->Email_title,
            'Email_file'=>$fileName,
            'Email_MSG'=>$r->Email_MSG,
        ]);

        //show
        $email=DB::table('emails')
        ->select('emails.*')
        ->get();

        Toastr::success(' Email already Send!! ','Success');
        Return redirect()->route('user.emails.index')->with('emails', $email);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        $email=DB::table('emails')
        ->select('emails.*')
        ->get();
        return view('user.emails.index')->with('emails', $email);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email=DB::table('emails')
        ->delete($id);

        $email=DB::table('emails')
        ->select('emails.*')
        ->get();

        Toastr::success(' Email already Delete!! ','Success');
        Return redirect()->route('user.emails.index')->with('emails', $email);
    }
}
