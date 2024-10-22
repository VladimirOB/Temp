<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vova', function () {
    return response()->json("vova");
});

Route::get('/test', function () {
    return response()->json("test");
});