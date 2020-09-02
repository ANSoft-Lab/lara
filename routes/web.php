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

Route::get('/', function () {
    return view('templates.main');
});

Route::get('about', function () {
    return view('templates.about');
})->name('about');

Route::get('kis', function () {
    return view('templates.kis');
})->name('kis');

Route::get('faq', function () {
    return view('templates.faq');
})->name('faq');

Route::get('team', function () {
    return view('templates.team');
})->name('team');

//Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');

Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Backpack\MenuCRUD
    Route::crud('menu-item', 'MenuItemCrudController');
});
