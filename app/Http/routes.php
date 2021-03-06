<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('notifications.create');
});

Route::post(
    '/subscribers/register',
    ['uses' => 'SubscribersController@register',
    'as' => 'subscribers.register']
);

Route::get(
    '/notifications/create',
    ['uses' => 'NotificationsController@create',
    'as' => 'notifications.create']
);

Route::post(
    '/notifications/send',
    ['uses' => 'NotificationsController@send',
    'as' => 'notifications.send']
);
