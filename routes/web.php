<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get(
    '/', 'LoginController@login'
);

Route::get(
    '/signup', 'SignupController@signup'
);


Route::post(
    '/login', 'UserController@login'
);

Route::post(
    '/signup', 'UserController@signup'
);

Route::get(
    '/profile', 'UserController@profile'
);



Route::get(
    '/log', function() {
        $data = session('email');
        return $data;
    }
);

Route::resource('groups', 'GroupController');
Route::resource('admin', 'AdminController');

Route::resource('posts', 'PostController');

/*Route::post(
    '/test', function () {
        echo 'Working';
    }
);*/