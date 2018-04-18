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

Route::get('/',  'BuildingController@getAllBuilding');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/addCustomer', 'CustomerController@GetAddCustomer')->middleware('auth');

Route::post('/addCustomer', 'CustomerController@AddCustomer')->middleware('auth');

Route::get('/addBuilding', 'BuildingController@GetAddBuilding')->middleware('auth');

Route::post('/addBuilding', 'BuildingController@AddBuilding')->middleware('auth');

Route::get('/seeBuilding', 'BuildingController@getAllBuilding');

Route::get('/deleteAnnonce/{id}', 'BuildingController@deleteBuilding')->middleware('auth');

Route::get('/editAnnonce/{id}', 'BuildingController@GetEditAnnonce')->middleware('auth');

Route::post('/postEditAnnonce/{id}', 'BuildingController@PostEditAnnonce')->middleware('auth');

Route::post('/search', 'SearchController@getAllAnnonceSearch');

Route::post('/searchFilter', 'SearchController@getAllAnnonceFilter');

Route::get('/getFiche/{id}', 'BuildingController@getFicheBuilding');