<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController as Country;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
