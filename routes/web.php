<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController as Country;
use App\Http\Controllers\AirlineController as Airline;
use App\Http\Controllers\AirportController as Airport;

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

Auth::routes();

//country routes
//index
Route::get('/countries', [Country::class, 'index'])->name('countries-index')->middleware('rp:admin') ;
//create
Route::get('/countries/create', [Country::class, 'create'])->name('countries-create')->middleware('rp:admin');
Route::post('/countries', [Country::class, 'store'])->name('countries-store')->middleware('rp:admin');
//edit
Route::get('/countries/edit/{country}', [Country::class, 'edit'])->name('countries-edit')->middleware('rp:admin');
Route::put('/countries/edit/{country}', [Country::class, 'update'])->name('countries-update')->middleware('rp:admin');
//delete
Route::delete('/countries/{country}', [Country::class, 'destroy'])->name('countries-delete')->middleware('rp:admin');

//airline routes
//index
Route::get('/airlines', [Airline::class, 'index'])->name('airlines-index')->middleware('rp:admin') ;
//create
Route::get('/airlines/create', [Airline::class, 'create'])->name('airlines-create')->middleware('rp:admin');
Route::post('/airlines', [Airline::class, 'store'])->name('airlines-store')->middleware('rp:admin');
//edit
Route::get('/airlines/edit/{airline}', [Airline::class, 'edit'])->name('airlines-edit')->middleware('rp:admin');
Route::put('/airlines/edit/{airline}', [Airline::class, 'update'])->name('airlines-update')->middleware('rp:admin');
//delete
Route::delete('/airlines/{airline}', [Airline::class, 'destroy'])->name('airlines-delete')->middleware('rp:admin');

//airport routes
//index
Route::get('/airports', [Airport::class, 'index'])->name('airports-index')->middleware('rp:admin') ;
//create
Route::get('/airports/create', [Airport::class, 'create'])->name('airports-create')->middleware('rp:admin');
Route::post('/airports', [Airport::class, 'store'])->name('airports-store')->middleware('rp:admin');
//edit
Route::get('/airports/edit/{airport}', [Airport::class, 'edit'])->name('airports-edit')->middleware('rp:admin');
Route::put('/airports/edit/{airport}', [Airport::class, 'update'])->name('airports-update')->middleware('rp:admin');
//delete
Route::delete('/airports/{airport}', [Airport::class, 'destroy'])->name('airports-delete')->middleware('rp:admin');
//show
Route::get('/airports/show/{id}', [Airport::class, 'show'])->name('airports-show')->middleware('rp:admin');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
