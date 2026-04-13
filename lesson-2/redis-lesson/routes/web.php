<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
Route::get('/', function () {
    Redis::set('name',"Moazam");
    return Redis::get('name');
    // return view('welcome');
});
