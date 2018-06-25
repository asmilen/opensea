<?php

use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

 Route::get('/resources/{path}', [
     'as' => 'upload.get',
     'uses' => 'Service\FileService@get',
 ])->where('path', '(.*)');

Route::get('/search', 'Service\SearchService@search');
Route::get('/searchStore', 'Service\SearchService@searchStore');
Route::get('/searchDeal', 'Service\SearchService@searchDeal');
Route::get('/init', 'Service\ElasticSearchService@init');
Route::get('frontend/tour','Frontend\TourController@index');

Route::middleware(['auth:api'])->group(function () {
    Route::get('/me', function (Request $request) {
        return $request->user();
    });

//User
    Route::get('/user/find', 'Service\UserService@find');
    Route::post('/user/create', 'Service\UserService@create');
    Route::get('/user/{user}', 'Service\UserService@index');
    Route::put('/user/{user}', 'Service\UserService@update');
    Route::patch('/user/{user}', 'Service\UserService@update');
    Route::delete('/user/{user}', 'Service\UserService@delete');

//Setting
    Route::get('/setting/find', 'Service\SettingService@find');
    Route::post('/setting/update', 'Service\SettingService@update');
    Route::post('/setting/delete', 'Service\SettingService@delete');
    Route::post('/setting/create', 'Service\SettingService@create');



    Route::group(['namespace' => 'Service'], function () {
//deal

        


        Route::post('upload/images', [
            'as' => 'upload.images',
            'uses' => 'FileService@images',
        ]);
        Route::post('upload/files', [
            'as' => 'upload.file',
            'uses' => 'FileService@files',
        ]);
        Route::post('upload/unlink', [
            'as' => 'upload.unlink',
            'uses' => 'FileService@unlink',
        ]);

        Route::get('tracking', [
            'as' => 'trackingService.index',
            'uses' => 'TrackingService@index',
        ]);
        Route::post('tracking', [
            'as' => 'trackingService.store',
            'uses' => 'TrackingService@store',
        ]);
        Route::get('tracking/{id}', [
            'as' => 'trackingService.show',
            'uses' => 'TrackingService@show',
        ]);
        Route::put('tracking/{id}', [
            'as' => 'trackingService.update',
            'uses' => 'TrackingService@update',
        ]);
        Route::delete('tracking/{id}', [
            'as' => 'trackingService.destroy',
            'uses' => 'TrackingService@destroy'
        ]);



        //contact
        Route::get('contact', [
            'as' => 'contactService.index',
            'uses' => 'ContactService@index',
        ]);
    });

//Payment

    Route::get('/setting/find', 'Service\SettingService@find');
    Route::post('/setting/update', 'Service\SettingService@update');
    Route::post('/setting/delete', 'Service\SettingService@delete');
    Route::post('/setting/create', 'Service\SettingService@create');

//ticket
    Route::get('/ticket/index', 'Service\TicketService@index');
    Route::post('/ticket/create', 'Service\TicketService@create');
    Route::post('/ticket/update', 'Service\TicketService@update');
    Route::post('/ticket/update-multi-order', 'Service\TicketService@updateMultiOrder');
    Route::post('/ticket/delete', 'Service\TicketService@delete');

    //tour
    Route::get('/tour/index', 'Service\TourService@index');
    Route::post('/tour/create', 'Service\TourService@create');
    Route::post('/tour/update', 'Service\TourService@update');
    Route::post('/tour/delete', 'Service\TourService@delete');

    //tour request
    Route::get('/tour-request/index', 'Service\TourRequestService@index');
    Route::get('/tour-request/{id}/detail', 'Service\TourRequestService@detail');
    Route::post('/tour-request/create', 'Service\TourRequestService@create');
    Route::post('/tour-request/update', 'Service\TourRequestService@update');
    Route::post('/tour-request/delete', 'Service\TourRequestService@delete');

    // request
    Route::get('/request/index', 'Service\RequestService@index');
    Route::post('/request/create', 'Service\RequestService@create');
    Route::post('/request/update', 'Service\RequestService@update');
    Route::post('/request/delete', 'Service\RequestService@delete');

});
