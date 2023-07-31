<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localizationRedirect', 'localeViewPath']
    ], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/', [ContactController::class, 'create']);

    Route::post('/Contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/img/{path}', [ImageController::class, 'show'])->where('path', '.*');

});









