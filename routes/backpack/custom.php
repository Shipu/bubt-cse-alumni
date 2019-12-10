<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('department', 'DepartmentCrudController');
    Route::crud('user', 'UserCrudController');
}); // this should be the absolute last line of this file

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web'],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('backpack.auth.register');
    Route::post('register', 'Auth\RegisterController@register');
}); // this should be the absolute last line of this file
