<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Symfony\Component\HttpFoundation\Response;
use App\Role;
use App\department;
use App\User;
use App\Email;
use App\Salary;
use DB;
use Gate;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::when($request->role, function ($query) use ($request) {
                $query->whereHas('roles', function ($query) use ($request) {
                    $query->whereId($request->role);
                });
            })->get();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $department=department::all();
        $roles = Role::all()->pluck('title', 'id');
        $LastID = DB::table('users')->max('id');

        return view('admin.users.create', compact('roles', 'LastID'))->with('departments',$department);
    }

    public function store(StoreUserRequest $request)
    {
        $addEmail=Email::create([
            'form_email'=>"Human Resourse Department",
            'to_email'=>$request->email,
            'EmailSender'=>"Human Resourse Department",
            'Email_title'=>"Default Email",
            'Email_file'=>"unnamed.gif",
            'Email_MSG'=>"Welcome to The Company. Any Question can ask anyone.",
        ]);

        $addSalary=Salary::create([
            'employee_id'=>$request->NewID,
            'Salary_amount'=>1200,
        ]);
        
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        Toastr::success('Users Create successfully! 🤗','Success');
        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        $department=department::all();

        return view('admin.users.edit', compact('roles', 'user'))->with('departments',$department);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        Toastr::success('Users update successfully :)','Success');
        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();
        Toastr::success('Users delete successfully :)','Success');
        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();
        DB::table('salaries')->where('salaries.id', '=', $id)->delete();
        Toastr::success('Users delete successfully :)','Success');
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
