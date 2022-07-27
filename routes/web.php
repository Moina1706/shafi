<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
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

Route::controller(ApprenantController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/apprenant/create', 'create');
    Route::get('/apprenant/{id}', 'show');
    Route::get('/apprenant/{id}/edit', 'edit');


    Route::post('/apprenant', 'store');
    Route::patch('/apprenant/{id}', 'update');
    Route::delete('/apprenant/{id}', 'destroy');
});
