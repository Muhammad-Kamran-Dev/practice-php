<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

// with parameter
Route::get("/about/{name?}",function(){
    return  "<h1>its About Page</h1>" ;
});

// with parameter optional
Route::get("/about/{name?}",function(){
    return  "<h1>its About Page</h1>" ;
});