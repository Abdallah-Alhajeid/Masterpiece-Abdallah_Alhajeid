<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Homepage route
Route::resource('/', 'HomeServicesController');

// Profile
Route::resource('/profile', 'ProfileController')->middleware("auth");
// view Profile
Route::get('user/profile/{id}', 'ProfileController@profile')->name('user.profile');
// about routes
// Route::get('/about', 'AboutController@index');

//contact routes
Route::get('contact', 'ContactController@contact');
Route::post('contact', 'ContactController@store');

//article routes
Route::resource('/articles', 'ArticlesController');
Route::POST('/articles/{id}', 'ArticlesController@comment_store');
// all services routes
// services routes
Route::get('/services', 'ServicesController@index');
Route::get('/service/{id}', 'ServicesController@show');
Route::POST('/service/{id}/book', 'ServicesController@book')->middleware("auth");
Route::resource('/manageService', 'ServicesController');

//add service routes
Route::view('/addservice', 'client.addService')->middleware("auth");
Route::post('addServiceContoller', 'addServiceController@save')->middleware("auth");

//search route
Route::POST('/services/search', 'ServicesController@search');

//admin routes
Route::middleware('auth:admin')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('', 'viewController@index')->name('home');
    Route::get('/viewAdmin', 'viewController@admin');

    Route::resource('/manageAdmin', 'manageAdminController');

    Route::get('/viewUser', 'viewController@user');
    Route::resource('/manageUser', 'manageUserController');

    Route::get('/viewArticle', 'viewController@article');
    Route::resource('/manageArticle', 'manageArticleController');

    Route::resource('/manageContact', 'manageContactController');

    Route::resource('/manageUnansweredFaq', 'manageUnansweredFaqController');
    Route::resource('/manageAnsweredFaq', 'manageAnsweredFaqController');

    //Admin Auth Routes
    Route::namespace ('Admin\Auth')->group(function () {
        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
});

//Admin Auth Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::namespace ('Admin\Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('log-to-admin');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
