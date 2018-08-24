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

Route::get(
    '/component', function () {
         return view('component');
    } 
);

/*Route::get(
    '/', function() {
        return view('welcome');
    }
//development
);*/



/*Route::get(
    '/', 'LoginController@login'
);*/

Route::get(
    '/signup', 'SignupController@signup'
);
/*      
Route::get(
    '/login', 'LoginController@index'
);
*/
//Route::post(
//    '/login', 'LoginController@login'
//);

//Route::post('login', array('uses' => 'LoginController@login'));


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
Route::resource('admin', 'AdminController')->middleware('admin');
Route::resource('users', 'UserController');//->middleware('auth');
Route::resource('profile', 'ProfileController');
Route::resource('posts', 'PostController')->middleware('auth');

/*Route::post(
    '/test', function () {
        echo 'Working';
    }
);*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//development
