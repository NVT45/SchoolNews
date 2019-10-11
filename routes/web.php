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


Route::get('/', function () {
    return view('welcome');
});
Route::get('home','FrontendController@getHome');
Route::get('type/{id}/{slug}.html','FrontendController@getTypes');
Route::get('news/{id}/{slug}.html','FrontendController@getNews');
Route::get('contact','FrontendController@getContact');
Route::post('contact','FrontendController@postContact');
Route::get('timetable','FrontendController@getTimeTable');
Route::get('schedules','FrontendController@getSchedules');
Route::get('category/{id}/{slug}.html','FrontendController@getCategory');


Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function (){
    Route::get('/','LoginController@getLogin');
    Route::post('/','LoginController@postLogin');
});
Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function (){
    Route::group(['prefix'=>'category'],function (){
    Route::get('/','AdminCategoryController@getCate');
    Route::post('/','AdminCategoryController@postCate');

    Route::get('edit/{id}','AdminCategoryController@getEditCate');
    Route::post('edit/{id}','AdminCategoryController@postEditCate');

    Route::get('delete/{id}','AdminCategoryController@getDeleteCate');

    Route::get('logout','AdminCategoryController@getLogout');
    });

    Route::group(['prefix'=>'type'],function (){
        Route::get('/','AdminTypeController@getType');
        Route::post('/','AdminTypeController@postType');

        Route::get('edit/{id}','AdminTypeController@getEditType');
        Route::post('edit/{id}','AdminTypeController@postEditType');

        Route::get('delete/{id}','AdminTypeController@getDeleteType');

    });

    Route::group(['prefix'=>'news'],function (){
        Route::get('/','AdminNewsController@getNews');

        Route::get('add','AdminNewsController@getAddNews');
        Route::post('add','AdminNewsController@postAddNews');

        Route::get('edit/{id}','AdminNewsController@getEditNews');
        Route::post('edit/{id}','AdminNewsController@postEditNews');

        Route::get('delete/{id}','AdminNewsController@getDeleteNews');
    });
    Route::group(['prefix'=>'schedule'],function (){
        Route::get('/','AdminSchedulesController@getSchedule');
        Route::post('/','AdminSchedulesController@postSchedule');

        Route::get('edit/{id}','AdminSchedulesController@getEditSchedule');
        Route::post('edit/{id}','AdminSchedulesController@postEditSchedule');

        Route::get('delete/{id}','AdminSchedulesController@getDeleteSchedule');
    });
});


