<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

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

    // Point Settings
    Route::delete('point-settings/destroy', 'PointSettingsController@massDestroy')->name('point-settings.massDestroy');
    Route::resource('point-settings', 'PointSettingsController');

    // Point
    Route::delete('points/destroy', 'PointController@massDestroy')->name('points.massDestroy');
    Route::resource('points', 'PointController');

    // Point Log
    Route::delete('point-logs/destroy', 'PointLogController@massDestroy')->name('point-logs.massDestroy');
    Route::resource('point-logs', 'PointLogController');

    // Point Redeem Type
    Route::delete('point-redeem-types/destroy', 'PointRedeemTypeController@massDestroy')->name('point-redeem-types.massDestroy');
    Route::resource('point-redeem-types', 'PointRedeemTypeController');

    // Prize
    Route::delete('prizes/destroy', 'PrizeController@massDestroy')->name('prizes.massDestroy');
    Route::post('prizes/media', 'PrizeController@storeMedia')->name('prizes.storeMedia');
    Route::post('prizes/ckmedia', 'PrizeController@storeCKEditorImages')->name('prizes.storeCKEditorImages');
    Route::resource('prizes', 'PrizeController');

    // Redeem Condition Setting
    Route::delete('redeem-condition-settings/destroy', 'RedeemConditionSettingController@massDestroy')->name('redeem-condition-settings.massDestroy');
    Route::resource('redeem-condition-settings', 'RedeemConditionSettingController');

    // Orders
    Route::delete('orders/destroy', 'OrdersController@massDestroy')->name('orders.massDestroy');
    Route::resource('orders', 'OrdersController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
