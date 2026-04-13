<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
Route::get('/', function () {
    // Redis::set('name',"Moazam");
    $data = [
        'event' => 'UserSignup',
        'data' => [
            'username' =>'Moazam Ali'
        ]
    ];
     Redis::publish('test-channel',json_encode($data));
    // return "done";
     return view('welcome');
});
