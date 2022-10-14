<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
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
Route::group([

    'middleware' => 'api',
    'prefix' => 'v1/'

], function ($router) {

    /*************
     * Auth Routes
     **************/
        Route::group([
            'middleware' => 'api',
            'prefix' => 'auth/'

        ], function ($router) {
            Route::post('register', [AuthController::class, 'register']);
            Route::post('login', [AuthController::class, 'login'])->name('login');
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
            Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
            Route::post('me', [AuthController::class, 'me'])->name('me');

        });


     /*************
     * Employee Routes
     **************/

    Route::group([
        'prefix' => 'employee/'

    ], 
    
    function ($router) {
//                   URL             Controller And            Funtion
        Route::post('create', [EmployeeController::class, 'create']);
    });

    Route::group([
        'prefix' => 'employee/'

    ], 
    
    function ($router) {
//                   URL             Controller And            Funtion
        Route::delete('delete/{id}', [EmployeeController::class, 'delete']);
    });


    Route::group([
        'prefix' => 'employee/'

    ], 
    
    function ($router) {
//                   URL             Controller And            Funtion
        Route::get('data-get', [EmployeeController::class, "dataGet"]);

    });

    Route::group([
        'prefix' => 'employee/'

    ], 
    
    function ($router) {
//                   URL             Controller And            Funtion
        Route::put('data-update/{id}', [EmployeeController::class, "update"]);

    });


    Route::group([
        'prefix' => 'employee/'

    ], 
    
    function ($router) {
//                   URL             Controller And            Funtion
        Route::get('search/{id}', [EmployeeController::class, "searchCustomer"]);

    });

});
