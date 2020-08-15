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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



//any route il faut mettre la dernière
Route::get('/{any?}', function (){
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*');/**/
