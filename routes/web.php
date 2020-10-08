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

Route::post('feedback_send', 'FeedbackController@store')->name('feedback_send');
Route::get('faq', function () {
    return view('templates.faq');
})->name('faq');

//Auth::routes();

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'), 
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'Admin',
], function () {
    Route::crud('menu-item', 'MenuItemCrudController');
});

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^(((?=(?!adminpanel))(?=(?!\/)).))*$', 'subs' => '.*']);

Route::get('/', function () {
    return view('templates.main');
});
