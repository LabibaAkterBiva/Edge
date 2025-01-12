<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "Welcome to laravel";
}
);
Route::get('/greeting', function () {
     return view('greeting');});
     
Route::get('/users', function () {
    $users=['John','Jane','Bob'];
    return view('users',compact('users'));
   });
