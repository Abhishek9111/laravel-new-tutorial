<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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
//correct way to access controller function
Route::get('/', [AppController::class, 'index']);
// basic route
// Route::get('/','AppController@function-name');
Route::get('/new',"AppController@index");


// route with required parameter
// Route::get('/test/{parameter}','AppController@function-name');

// route with optional parameter-> add question mark after parameter name
// Route::get('/test/{parameter?}','AppController@function-name');

// named route => also called as reverse routing
// Route::get('/contact','AppController@function-name')=>name('contact');

Route::get('/Hello', function () {
    echo "Hello";
    // return view('welcome');`
});
