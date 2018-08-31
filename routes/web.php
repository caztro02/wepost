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
/*
Route::get(
    '/login', function () {
         return view('pages.login');
    }   
);*/ 

Route::get(
    '/signup', function () {
         return view('pages.signup');
    }   
); 

Route::get(
    '/status', function () {
         return view('pages.status');
    }   
); 

Route::get(
    '/', function () {
         return view('layout.default');
    }   
);

Route::get(
    '/extend', function () {
         return view('extend');
    }   
);

Route::get(
    '/header', function () {
         return view('includes.header');
    }   
); 


/*
Route::get(
    '/signup', 'SignupController@signup'
);*/

/*Route::get(
    '/login', 'LoginController@index'
);*/


//Route::post(
//    '/login', 'LoginController@login'
//);

//Route::post('login', array('uses' => 'LoginController@login'));

/*
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
*/

//Route::resource('profile', 'ProfileController');
//Route::resource('groups', 'GroupController');
/*Route::post(
    '/test', function () {
        echo 'Working';
    }
);*/


Route::get('/home', 'HomeController@index')->name('home');

/*Route::get(
    '/', function() {
        return view('welcome');
    }
);*/

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

Route::put('/changeProfile/{id}', 'UserController@changeProfile')
    ->name('changeProfile')->middleware('auth');

Route::get(
    '/passwordSettings/{id}', 'UserController@passwordSettings'
)->name('passwordSettings')->middleware('auth');

Route::post('/changePassword', 'UserController@changePassword')
    ->name('changePassword')->middleware('auth');



Route::resource('admin', 'AdminController')->middleware('admin');
Route::resource('users', 'UserController')->middleware('auth');
Route::resource('posts', 'PostController')->middleware('auth');
Route::resource('comments', 'CommentController')->middleware('auth');




Auth::routes();

Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');
Route::get('/verifyEmail', 'VerifyController@verifyEmail')->name('verifyEmail');

