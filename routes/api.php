<?php

use Illuminate\Support\Facades\Route;

Route::post('order',[
    'uses'=>'Api\OrderController@earnPoint',
]);
Route::post('redeemPrize',[
    'uses'=>'Api\RedeemController@redeemPrize',
]);
Route::get('prize', [
    'uses'=>'Api\RedeemController@allPrize',
]);
Route::post('updatePointByUser',[
    'uses'=>'Api\OrderController@updatePointByUserId',
]);
Route::post('updatePoint/{id}',[
    'uses'=>'Api\OrderController@updatePoint',
]);

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    Route::get('order',[
        'uses'=>'Api\OrdersApiController@earnFreePoint',
    ]);

    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Point Settings
    Route::apiResource('point-settings', 'PointSettingsApiController');

    // Point
    Route::apiResource('points', 'PointApiController');

    // Point Log
    Route::apiResource('point-logs', 'PointLogApiController');

    // Point Redeem Type
    Route::apiResource('point-redeem-types', 'PointRedeemTypeApiController');

    // Prize
    Route::post('prizes/media', 'PrizeApiController@storeMedia')->name('prizes.storeMedia');
    Route::apiResource('prizes', 'PrizeApiController');

    // Redeem Condition Setting
    Route::apiResource('redeem-condition-settings', 'RedeemConditionSettingApiController');

    // Orders
    Route::apiResource('orders', 'OrdersApiController');
});
