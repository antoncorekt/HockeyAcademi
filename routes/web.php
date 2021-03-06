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

    Route::get('/', 'MainController@index')->name('index');


    Route::get('/about', function () {
        return view('about/about');
    });

    Route::get('/modal-enrol', 'MainController@showModal')->name('others/enrol');

    Route::get('/modal-coach/{id}', 'MainController@showCoach')->name('modal-coach/{id}');
    Route::get('/modal-details', 'MainController@showDetails')->name('about/details');
    Route::get('/modal-selects', 'MainController@showDetailsSelects')->name('about/selects');
    Route::get('/modal-living', 'MainController@showLiving')->name('about/living');

    Route::get('/modal-krynica', 'MainController@showDetailsKrynica')->name('about/krynica');
    Route::get('/modal-education', 'MainController@showDetailsEducation')->name('about/education');
    Route::get('/modal-slovac', 'MainController@showDetailsSlovac')->name('about/slovac');

    Route::get('/train', 'MainController@showTrain')->name('about/train');



    Route::get('/contacts', function () {
        return view('contacts/contact');
    });

    Route::get('/blog', 'MainController@blogList')->name('blog/blog');
    Route::get('/post/{id}', 'MainController@showPost'); ///???????????????????
    //Route::get('/modal-post/{id}', 'MainController@showPost')->name('blog/article');

    Route::get('/gif', function () {
        return view('others/gif');
    });

});
Route::post('/enrol','MainController@enrolForm');
Auth::routes();
//Route::get('/modal', 'MainController@showModal')->name('modal');