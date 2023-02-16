<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route tickets
Route::resource('tickets',TicketController::class);
Route::view('errors','tickets.errors')->name('errors');
Route::post('/rechercher/etat',[TicketController::class,'searchByEtat'])->name('serache.etat');
Route::post('/rechercher/csc',[TicketController::class,'searchByCsc'])->name('serache.csc');
Route::get('/chartjs', function () {
    return view('tickets.mychart');
});
Route::get('/chart/csc/semaine',[ChartController::class,'chartCscParSemaine']);
Route::get('/chart/csc/mois',[ChartController::class,'chartCscParMois']);