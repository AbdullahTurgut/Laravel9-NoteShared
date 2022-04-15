<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
Route::get('/', [HomeController::class,'index'])->name('home');



Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');



// admin/category kısmındaki sürekli tekrarlanan durumu kaldırmak için prefix yöntemi
Route::prefix('admin')->name('admin.')->group(function () {
//***********AdminPanel Controller***************
    Route::get('/', [AdminHomeController::class,'index'])->name('index');

//    ***********AdminPanel CATEGORY ROUTES***************
    Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
    });

//    ***********AdminPanel CONTENT ROUTES***************
    Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
});
