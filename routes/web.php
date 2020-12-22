<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new1', function () {
    return view('New.index1');
});

Route::get('/new2', function () {
    return view('New.index2');
});

Route::get('/new3', function () {
    return view('New.index3');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    //calender
    Route::get('calendar', 'CalendarController@index')->name('calendar.index');
});

//Emails
Route::get('/Email',[                   'uses'=>'EmailController@index',    'as'=>'user.emails.index']);
Route::get('/Email/newEmail',[          'uses'=>'EmailController@create',   'as'=>'user.email.create']);
Route::post('/Email/newEmail/send',[    'uses'=>'EmailController@store',    'as'=>'user.email.store']);
Route::get('/Email/destroy/{id}',[      'uses'=>'EmailController@destroy',  'as'=>'user.email.destroy']);

//salary
Route::get('/salary',[                  'uses'=>'SalaryController@index',   'as'=>'user.salary.index']);
Route::get('/salary/show/{id}',[        'uses'=>'SalaryController@show',    'as'=>'user.salary.show']);
Route::get('/salary/edit/{id}',[        'uses'=>'SalaryController@edit',    'as'=>'user.salary.edit']);
Route::post('/salary/update/{id}', [    'uses'=>'SalaryController@update',  'as' => 'user.salary.update']);
Route::get('/salary/destroy/{id}',[     'uses'=>'SalaryController@destroy', 'as'=>'user.salary.destroy']);

//leave
Route::get('/leave',[                   'uses'=>'LeaveController@index',    'as'=>'user.leave.index']);
Route::get('/leave/create',[            'uses'=>'LeaveController@create',   'as'=>'user.leave.create']);
Route::post('/leave/store',[            'uses'=>'LeaveController@store',    'as'=>'user.leave.store']);
Route::get('/leave/approved/{id}',[     'uses'=>'LeaveController@approved', 'as'=>'user.leave.approved']);
Route::get('/leave/reject/{id}',[       'uses'=>'LeaveController@reject',   'as'=>'user.leave.reject']);

//calendar
Route::get('/calendar',[                'uses'=>'calendarController@index',     'as'=>'calendar']);
Route::get('/event/add',[               'uses'=>'calendarController@create',    'as'=>'calendar.add']);
Route::post('/event/store',[            'uses'=>'calendarController@store',     'as'=>'calendar.store']);
Route::get('/event',[                   'uses'=>'calendarController@index2',    'as'=>'admin.calendar.index']);
Route::get('/event/edit/{id}',[         'uses'=>'calendarController@edit',      'as'=>'admin.calendar.edit']);
Route::post('/event/update/{id}', [     'uses'=>'calendarController@update',    'as' => 'admin.calendar.update']);
Route::get('/event/destroy/{id}',[      'uses'=>'calendarController@destroy',   'as'=>'admin.calendar.destroy']);

//department
Route::get('/department',[              'uses'=>'DepartmentController@index',   'as'=>'admin.department.index']);
Route::get('/department/add',[          'uses'=>'DepartmentController@create',  'as'=>'admin.department.create']);
Route::get('/department/edit/{id}',[    'uses'=>'DepartmentController@edit',    'as'=>'admin.department.edit']);
Route::post('/department/update/{id}',[ 'uses'=>'DepartmentController@update',  'as'=>'admin.department.update']);
Route::post('/department/store',[       'uses'=>'DepartmentController@store',   'as'=>'admin.department.store']);
Route::get('/department/delete/{id}',[  'uses'=>'DepartmentController@destroy', 'as'=>'admin.department.destroy']);

//job controller
Route::get('/Controller',[                          'uses'=>'JobController@index',              'as'=>'admin.JobApp.index']);
Route::get('/Controller/show',[                     'uses'=>'JobController@show',               'as'=>'admin.Job.show']);
Route::get('/Controller/Location/add',[             'uses'=>'JobController@createLocation',     'as'=>'admin.Location.create']);
Route::get('/Controller/Hirings/add',[              'uses'=>'JobController@createHiring',       'as'=>'admin.Hirings.create']);
Route::get('/Controller/Types/add',[                'uses'=>'JobController@createType',         'as'=>'admin.Types.create']);
Route::post('/Controller/Location/store',[          'uses'=>'JobController@storeLocation',      'as'=>'admin.Location.store']);
Route::post('/Controller/Hirings/store',[           'uses'=>'JobController@storeHiring',        'as'=>'admin.Hirings.store']);
Route::post('/Controller/Types/store',[             'uses'=>'JobController@storeType',          'as'=>'admin.Types.store']);
Route::get('/Controller/Location/edit/{id}',[       'uses'=>'JobController@editLocation',       'as'=>'admin.Location.edit']);
Route::get('/Controller/Hirings/edit/{id}',[        'uses'=>'JobController@editHiring',         'as'=>'admin.Hirings.edit']);
Route::get('/Controller/Types/edit/{id}',[          'uses'=>'JobController@editType',           'as'=>'admin.Types.edit']);
Route::post('/Controller/Location/update/{id}',[    'uses'=>'JobController@updateLocation',     'as'=>'admin.Location.update']);
Route::post('/Controller/Hirings/update/{id}',[     'uses'=>'JobController@updateHiring',       'as'=>'admin.Hirings.update']);
Route::post('/Controller/Types/update/{id}',[       'uses'=>'JobController@updateType',         'as'=>'admin.Types.update']);
Route::get('/Controller/Location/delete/{id}',[     'uses'=>'JobController@destroyLocation',    'as'=>'admin.Location.destroy']);
Route::get('/Controller/Hirings/delete/{id}',[      'uses'=>'JobController@destroyHiring',      'as'=>'admin.Hirings.destroy']);
Route::get('/Controller/Types/delete/{id}',[        'uses'=>'JobController@destroyType',        'as'=>'admin.Types.destroy']);

//job application
Route::get('/JobApp/create',[             'uses'=>'JobAppController@create',          'as'=>'admin.JobApp.create']);
Route::post('/JobApp/store',[             'uses'=>'JobAppController@store',           'as'=>'admin.JobApp.store']);
Route::get('/JobApp/show/{id}',[          'uses'=>'JobAppController@show',            'as'=>'admin.JobApp.show']);
Route::get('/JobApp/edit/{id}',[          'uses'=>'JobAppController@edit',            'as'=>'admin.JobApp.edit']);
Route::post('/JobApp/update/{id}',[       'uses'=>'JobAppController@update',          'as'=>'admin.JobApp.update']);
Route::get('/JobApp/delete/{id}',[        'uses'=>'JobAppController@destroy',         'as'=>'admin.JobApp.destroy']);


//job 
Route::get('/Job/create',[              'uses'=>'JobAppController@createJob',           'as'=>'admin.Job.create']);
Route::post('/Job/store',[              'uses'=>'JobAppController@storeJob',            'as'=>'admin.Job.store']);
Route::get('/Job/show/{id}',[           'uses'=>'JobAppController@showJob',             'as'=>'admin.Job.show']);
Route::get('/Job/index',[               'uses'=>'JobAppController@index',               'as'=>'admin.Job.index']);
Route::post('/Job/approved/{id}',[      'uses'=>'JobAppController@approved',            'as'=>'admin.Job.approved']);
Route::get('/Job/delete/{id}',[         'uses'=>'JobAppController@destroy',             'as'=>'admin.Job.destroy']);
Auth::routes();

Route::post('/home/store',[ 'uses'=>'TodolistController@store', 'as'=>'user.todo.store']);
Route::get('/home/edit/{id}',[ 'uses'=>'TodolistController@edit', 'as'=>'user.todo.edit']);
Route::get('/home/complete/{id}',[ 'uses'=>'TodolistController@complete', 'as'=>'user.todo.complete']);
Route::post('/home/update/{id}',[ 'uses'=>'TodolistController@update', 'as'=>'user.todo.update']);
Route::get('/home/destroy/{id}',[ 'uses'=>'TodolistController@destroy', 'as'=>'user.todo.destroy']);
Route::get('/home/delete/{id}',[ 'uses'=>'TodolistController@delete', 'as'=>'user.todo.delete']);
Route::get('/home', [App\Http\Controllers\TodolistController::class, 'index'])->name('home');

//project
Route::get('/Project',[                     'uses'=>'ProjectController@index',            'as'=>'admin.Project.index']);
Route::get('/Project/create',[              'uses'=>'ProjectController@create',           'as'=>'admin.Project.create']);
Route::post('/Project/store',[              'uses'=>'ProjectController@store',            'as'=>'admin.Project.store']);
Route::get('/Project/createTask/{id}',[     'uses'=>'ProjectController@createTask',       'as'=>'admin.Project.createTask']);
Route::post('/Project/storeTask',[          'uses'=>'ProjectController@storeTask',        'as'=>'admin.Project.storeTask']);
Route::get('/Project/show/{id}',[           'uses'=>'ProjectController@show',             'as'=>'admin.Project.show']);
Route::get('/Project/list',[                'uses'=>'ProjectController@indexList',        'as'=>'admin.Project.indexList']);
Route::post('/Project/Enroll',[             'uses'=>'ProjectController@Enroll',           'as'=>'admin.Project.Enroll']);
Route::get('/Project/Task',[                'uses'=>'ProjectController@indexTask',        'as'=>'admin.Project.indexTask']);
Route::post('/Project/Task/enroll/{id}',[   'uses'=>'ProjectController@EnrollTask',       'as'=>'admin.Project.EnrollTask']);
Route::post('/Project/Task/Action/{id}',[   'uses'=>'ProjectController@Action',           'as'=>'admin.Project.Action']);



