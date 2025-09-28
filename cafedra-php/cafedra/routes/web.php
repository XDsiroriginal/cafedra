<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'qweqweqwe']);
});

Route::get('/test', function () {
    return response()->json(['status' => 'OK', 'message' => 'asdasdasd']);
});
