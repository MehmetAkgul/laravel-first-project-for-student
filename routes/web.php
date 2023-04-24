<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/2', function () {
    return view('welcome2', array("degisken" => "kirmizi"));
});
Route::get('/3', function () {
    return view('welcome3')->with("buton", '  deneme&nbsp;deneme <br> ');
});
Route::get('/4', function () {
    return view('welcome4')->with("data", ["bosluk" => " deneme&nbsp;deneme <br> ", "button" => '<a href="3" > tikla </a>']);
});


Route::get('/5', function () {
    return view('admin/dashboard')
        ->with("data1", "value1")
        ->with("data2", "value2");
});
Route::get('/dashboard', function () {  return view('admin/dashboard')->with("data1", "data1")->with("data2", "data2"); });

Route::get('/user/{id}', function (string $id) {  return view('admin/user')->with("id", $id); });
Route::get('/user2/{id?}', function (string $id="0") {  return view('admin/user2')->with("id", $id); });
