<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
<<<<<<< HEAD
=======
});

Route::get('/Me', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return response()->json("test");
>>>>>>> Jack
});