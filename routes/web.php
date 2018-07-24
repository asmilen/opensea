<?php

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

Route::get('/', 'Frontend\IndexController@index')->name('frontend::index');
Route::get('/bus', 'Frontend\IndexController@bus')->name('frontend::bus');
Route::get('/tour', 'Frontend\IndexController@tour')->name('frontend::tour');

Route::post('/tour-request', 'Frontend\TourController@sendRequest')->name('send-tour-request');
Route::post('/customer-message', 'Frontend\IndexController@customerMessage')->name('send-customer-message');

Auth::routes();

Route::get('system', 'System\IndexController@index')->name('system-index');
Route::get('system/user', 'System\IndexController@user')->name('system-user');
Route::get('system/setting', 'System\SettingController@index')->name('system-setting');
Route::get('system/frontend-config', 'System\SettingController@frontendConfig')->name('frontend-config');
Route::any('system/news/dialog', 'System\TicketController@tinymceImageDialog');
Route::any('system/news/upload', 'System\TicketController@tinymceImageUpload');
Route::get('system/request', 'System\RequestController@index')->name('system-request');
Route::get('system/ticket', 'System\TicketController@index')->name('system-ticket');
Route::get('system/tour', 'System\TourController@index')->name('system-tour');
Route::get('system/attraction', 'System\AttractionController@index')->name('system-attraction');
Route::get('system/tour-requests', 'System\TourRequestController@index')->name('system-tour-request');
Route::get('system/tour-requests/{tourRequest}/edit', 'System\TourRequestController@edit');
Route::get('system/customer-messages', 'System\CustomerMessageController@index')->name('system-customer-message');
Route::get('system/customer-messages/{customerMessage}/edit', 'System\CustomerMessageController@edit');
Route::get('system/map', 'System\MapController@index')->name('system-map');

