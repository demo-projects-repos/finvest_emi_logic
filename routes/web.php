<?php

use Illuminate\Support\Facades\Route;
include(app_path().'/global_constants.php');

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

Route::group(array('prefix' => 'admin'),  function() {
    Route::get('/', array('as' => 'admin.login', 'uses' => 'admin\UserController@index'));
    Route::post('/', array('as' => 'admin.login', 'uses' => 'admin\UserController@index'));

    Route::get('/loans', array('as' => 'admin.loansDetails', 'uses' => 'admin\LoansController@index'));
});
