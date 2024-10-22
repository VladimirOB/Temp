<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $res = DB::table('tbl')->get();
    return response()->json($res);
});