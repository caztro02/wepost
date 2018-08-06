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
    '/', function () {
         return view('welcome');
    }   
); 


Route::get(
    '/login', function () {
         return view('pages.login');
    }   
); 

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
    '/default', function () {
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
         return view('component', ['name' => 'Vanesa']);
    }   
);
