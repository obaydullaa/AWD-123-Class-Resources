<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

// single route
Route::get('/hello', function () {
    return view('hello.hello');
});

Route::prefix('student')->group(function(){

    Route::get("name", function() {
        echo "My name is Obaydulla";
    });
    Route::get("create", function() {
        echo "Create a student.";
    });
    Route::get("roll", function() {
        echo "My roll no is 05.";
    });
});

Route::prefix('product')->group(function(){
    Route::get('item-name', function(){
        echo "Item name is fashions";
    });
    Route::get('quantity', function(){
        echo 50;
    });
});


