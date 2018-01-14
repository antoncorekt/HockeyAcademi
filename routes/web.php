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

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/'. App\Http\Middleware\LocaleMiddleware::getLocale());
});




Route::prefix(App\Http\Middleware\LocaleMiddleware::getLocale())->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/about', function () {
        return view('about');
    });
});


