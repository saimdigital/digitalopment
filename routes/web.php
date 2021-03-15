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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Routes Start
Route::get('/','MainHomeController@index');
Route::get('/aboutus','MainHomeController@aboutus');
Route::get('/portfolio','MainHomeController@portfolio');
Route::get('/services','MainHomeController@services');
Route::get('/career','MainHomeController@career');
Route::get('/blog','MainHomeController@blog');
Route::get('/contact','MainHomeController@contact');
// Frontend Routes End

// Admin Panel Routes Start
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['admin_auth']], function(){   
    Route::get('/dashboard','AdminHomeController@dashboard');
    Route::get('/menu','MenuController@index')->name('menu.get');
    Route::resource('/home_slider', 'HomeSliderController');
    Route::put('home_slider/{home_slider}/status', 'HomeSliderController@status');
    Route::resource('/home_video', 'HomeVideoController');
    Route::put('home_video/{home_video}/status', 'HomeVideoController@status');
    Route::resource('/serviceinfo', 'ServiceInfoController');
    Route::put('serviceinfo/{serviceinfo}/status', 'ServiceInfoController@status');
    Route::resource('/home_service', 'HomeServiceController');
    Route::put('home_service/{home_service}/status', 'HomeServiceController@status');
    Route::resource('/portfolioinfo', 'PortinfoController');
    Route::put('portfolioinfo/{portfolioinfo}/status', 'PortinfoController@status');
    Route::resource('/home_portfolio', 'HomePortfolioController');
    Route::put('home_portfolio/{home_portfolio}/status', 'HomePortfolioController@status');
});

// Authentication Routes Start
Route::get('/admin/register','Admin\AdminHomeController@register');
Route::post('/admin/register','Admin\AdminHomeController@storeUser');
Route::get('/admin','Admin\AdminHomeController@login');
Route::post('/admin','Admin\AdminHomeController@store');
Route::get('/admin/forgot-password', 'Admin\AdminHomeController@getEmail');
Route::post('/admin/forgot-password', 'Admin\AdminHomeController@postEmail');
Route::get('/admin/reset-password/{token}', 'Admin\AdminHomeController@getPassword');
Route::post('/admin/reset-password', 'Admin\AdminHomeController@updatePassword');
Route::get('/admin/logout', 'Admin\AdminHomeController@logout')->name('logout');
// Authentication Routes End
// Admin Panel Routes End