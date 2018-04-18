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

Route::get('/addCustomer', 'CustomerController@GetAddCustomer');

Route::post('/addCustomer', 'CustomerController@AddCustomer');

Route::get('/addBuilding', 'BuildingController@GetAddBuilding');

Route::post('/addBuilding', 'BuildingController@AddBuilding');

Route::get('/seeBuilding', 'BuildingController@getAllBuilding');

Route::get('/deleteAnnonce/{id}', 'BuildingController@deleteBuilding');

Route::get('/editAnnonce/{id}', 'BuildingController@GetEditAnnonce')->middleware('auth');

Route::post('/postEditAnnonce/{id}', 'BuildingController@PostEditAnnonce');

Route::post('/search', 'SearchController@getAllAnnonceSearch');

Route::post('/searchFilter', 'SearchController@getAllAnnonceFilter');

Route::get('/getFiche/{id}', 'BuildingController@getFicheBuilding');