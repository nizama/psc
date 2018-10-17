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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('products', 'ProductController');

Route::resource('accessories', 'AccessoryController');

Route::resource('brands', 'BrandController');

Route::resource('statuses', 'StatusController');

Route::resource('damages', 'DamageController');

Route::resource('conditions', 'ConditionController');

Route::resource('warranties', 'WarrantyController');

Route::resource('caseAccessories', 'CaseAccessoryController');

Route::resource('sequences', 'SequenceController');

Route::resource('conditionDamages', 'ConditionDamageController');

Route::resource('cases', 'CaseController');

Route::resource('physicalDamages', 'PhysicalDamageController');

Route::resource('caseLogs', 'CaseLogController');