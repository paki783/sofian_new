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

Route::get('/', "HomeController@index");

Route::get('/nachhilfe-vor-ort', function () {
    return view('frontend/nachhilfe-vor-ort');
});

Route::get('/kontakt', function () {
    return view('frontend/kontakt');
});
Route::get('/login', function () {
    return view('frontend/login');
});
Route::get('/signup', function () {
    return view('frontend/signup');
});
Route::get('/lostusername', function () {
    return view('frontend/lostusername');
});
Route::get('/lostuserpass', function () {
    return view('frontend/lostuserpass');
});
Route::get('/lost-account-details', function () {
    return view('frontend/lost-account-details');
});
Route::get('/faq', function () {
    return view('frontend/faq');
});
Route::get('/impressum', function () {
    return view('frontend/impressum');
});

Route::get('/agb', function () {
    return view('frontend/agb');
});

Route::get('/datenschutz', function () {
    return view('frontend/datenschutz');
});

Route::get('/leistungsuebersicht-und-preise', function () {
    return view('frontend/leistungsuebersicht-und-preise');
});

Route::prefix('ajax')->group(function () {
    Route::post('/getCategory', "AjaxController@getCategory");
});

Route::prefix('user')->group(function () {
    Route::post('registerUser', "UserController@registerUser");
    Route::post('loginAuth', "UserController@loginAuth");
    Route::get('logout', "UserController@logout");
});

Route::prefix('courses')->group(function () {
    Route::get('/', "CoursesController@courses");
    Route::get('/details/{id}', "CoursesController@details");
    Route::post('/purchaseHistory', "CoursesController@purchaseHistory");
});

Route::prefix('/admin')->group(function () {
    Route::get('/', "backend\UserController@login");
    Route::post('/Auth', "backend\UserController@Auth");
    Route::get('/createUser', "backend\UserController@createUser");
    Route::get('/dashboard', "backend\DashboardController@index");

    Route::prefix('category/')->group(function(){
        Route::get('/', "backend\CategoryController@index");
        Route::get('/add/{type}', "backend\CategoryController@add");
        Route::post('/save', "backend\CategoryController@save");

        Route::get('/edit', "backend\CategoryController@edit");
        Route::post('/update', "backend\CategoryController@update");

        Route::get('/delete', "backend\CategoryController@delete");
        
        Route::get('/courses_cat', "backend\CategoryController@courses_cat");
    });

    Route::prefix('courses/')->group(function(){
        Route::get('/', "backend\CoursesController@index");
        Route::get('/add', "backend\CoursesController@add");
        Route::get('/edit', "backend\CoursesController@edit");
        Route::post('/save', "backend\CoursesController@save");
        Route::post('/update', "backend\CoursesController@update");
        Route::get('/delete', "backend\CoursesController@delete");
    });

    Route::prefix('user')->group(function(){
        Route::get('/all', "backend\UserController@all");
    });

    Route::prefix('forum')->group(function(){
        Route::get('/all', "backend\ForumController@all");
        Route::get('/edit', "backend\ForumController@edit");
        Route::get('/deleteComment', "backend\ForumController@deleteComment");
    });

    Route::prefix('purchases')->group(function(){
        Route::get('/all', "backend\PurchaseController@all");
    });
});