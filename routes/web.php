<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
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

//************HOME PAGE ROUTES***********************
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');
Route::get('/loginuser',[HomeController::class,'loginuser'])->name('loginuser');
Route::get('/registeruser',[HomeController::class,'registeruser'])->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');

Route::view('/loginadmin','admin.login');
Route::post('/loginadmincheck', [HomeController::class,'loginadmincheck'])->name('loginadmincheck');



//Get Deatils Page From Main Page
Route::get('/content/{id}',[HomeController::class, 'content'])->name('content');

Route::get('/categorycontents/{id}/{slug}',[HomeController::class, 'categorycontents'])->name('categorycontents');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');



// admin/category kısmındaki sürekli tekrarlanan durumu kaldırmak için prefix yöntemi
Route::prefix('admin')->name('admin.')->group(function () {
//***********AdminPanel Controller***************
    Route::get('/', [AdminHomeController::class,'index'])->name('index');


//************General Routes****************
    Route::get('/setting', [AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class,'settingUpdate'])->name('setting.update');


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

//    ***********ADMIN CONTENT IMAGE GALLERY ROUTES***************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{cid}', 'index')->name('index');
        Route::post('/store/{cid}', 'store')->name('store');
        Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');

    });

    //    ***********ADMIN Message ROUTES***************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });

    //    ***********ADMIN FAQ ROUTES***************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //    ***********ADMIN Comment ROUTES***************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });

    //    ***********ADMIN User ROUTES***************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
    });
});
