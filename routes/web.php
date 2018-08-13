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



//Route::get(
 //   '/', 'LoginController@login'
//);

Route::get(
    '/', function() {
        return view('welcome');
    }
);

Route::get(
    '/signup', 'SignupController@signup'
);

Route::get(
    '/login', 'LoginController@index'
);

//Route::post(
//    '/login', 'LoginController@login'
//);

Route::post('login', array('uses' => 'LoginController@login'));


Route::get(
    '/camera', function() {
        return view('camera');
    }
);

Route::get(
    '/chroma', function() {
        return view('chroma');
    }
);


Route::get(
    '/log', function() {
        $data = session('email');
        return $data;
    }
);

Route::get(
    '/user', function() {
        return view('user.index');
    }
);

Route::resource('groups', 'GroupController');
Route::resource('admin', 'AdminController');
Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');

/*Route::post(
    '/test', function () {
        echo 'Working';
    }
);*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
