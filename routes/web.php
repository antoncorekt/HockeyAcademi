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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/'. App\Http\Middleware\LocaleMiddleware::getLocale());
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('auth/login', [ 'as' => 'login', 'uses' => 'Controller@login']);
Route::post('auth/login', [ 'as' => 'login', 'uses' => 'Controller@authenticate']);
Route::get('auth/logout', 'Controller@logout');

Route::prefix(App\Http\Middleware\LocaleMiddleware::getLocale())->group(function () {

    Route::get('/', function () {
        return view('index/index');
    })->middleware('auth');;


    Route::get('/about', function () {
        return view('about/about');
    })->middleware('auth');

    Route::get('/modal-enrol', 'MainController@showModal')->name('others/enrol');

    Route::get('/modal-coach/{id}', 'MainController@showCoach')->name('about/coach');
    Route::get('/modal-details', 'MainController@showDetails')->name('about/details');
    Route::get('/modal-selects', 'MainController@showDetailsSelects')->name('about/selects');
    Route::get('/modal-krynica', 'MainController@showDetailsKrynica')->name('about/krynica');
    Route::get('/modal-education', 'MainController@showDetailsEducation')->name('about/education');
    Route::get('/modal-slovac', 'MainController@showDetailsSlovac')->name('about/slovac');

    Route::get('/contacts', function () {
        return view('contacts/contact');
    })->middleware('auth');

    Route::get('/blog', function () {
        return view('blog/blog');
    })->middleware('auth');

   // Route::resource('/modal', 'MainController@showModal');

});
Route::post('/enrol','MainController@enrolForm')->middleware('auth');
Auth::routes();
//Route::get('/modal', 'MainController@showModal')->name('modal');