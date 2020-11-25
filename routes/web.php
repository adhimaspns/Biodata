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
        return view('welcome');
    });

    // Route resource biodata
    Route::resource('biodata', 'Backend\BiodataController');



















// Route::get('hello_world', function() {
//     return "Nisa";
// });

// Route::get('view', 'NisaController@index');

// Route::get('namasaya', 'NisaController@namasaya');

// Route::get('myview', function() {
//     return view('index');
// });
