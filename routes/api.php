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

// Below mention routes are public, user can access those without any restriction.
// Create New User
Route::post('register', 'AuthController@register');

Route::post('contact', 'ContactController@store');
Route::post('contact-entreprise', 'ContactEntrepriseController@store');

Route::group([

    'prefix' => 'auth',
    'middleware'=> ['cors','api']

], function(){

    // Login User
    Route::post('login', 'AuthController@login');

    // Refresh the JWT Token
    Route::post('refresh', 'AuthController@refresh');



    // Below mention routes are available only for the authenticated users.
    Route::middleware('auth:api')->group(function () {

        // Logout user from application
        Route::post('logout', 'AuthController@logout');

        // Get user info
        Route::get('user', 'AuthController@user');
    });

});

