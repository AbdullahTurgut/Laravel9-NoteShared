<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

//do something in route
Route::get('/hello', function () {
    return "Hello World";
});

//call controller function
Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');



Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');
