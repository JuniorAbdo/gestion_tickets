<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\SousCategorieController;
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
    return view('auth.login');//welcome
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route tickets
Route::resource('tickets',TicketController::class);



Route::middleware(['responsable','auth'])->group(function (){
    Route::get('/chart/csc/semaine',[ChartController::class,'chartCscParSemaine'])
    ->name('chart.semaine');
    Route::get('/chart/csc/mois',[ChartController::class,'chartCscParMois'])
    ->name('chart.mois');
    Route::get('/chart/csc/ticket/semaine',[ChartController::class,'chartTicketParSemaine'])
    ->name('chart.ticket.semaine');
    Route::get('/chart/csc/ticket/mois',[ChartController::class,'chartTicketCscParMois'])
    ->name('chart.ticket.mois');
    Route::view('errors','tickets.errors')->name('errors');
Route::post('/rechercher/etat',[TicketController::class,'searchByEtat'])->name('serache.etat');
Route::post('/rechercher/csc',[TicketController::class,'searchByCsc'])->name('serache.csc');
Route::post('/rechercher/categorie',[TicketController::class,'searchByCategorie'])->name('serache.categorie');
    Route::get('tikcets/cloturer',[TicketController::class,'ticketsCloturer'])->name('tickets.cloture');
});
Route::middleware(['admin','responsable','auth'])->group(function() {
    Route::get('users', [AdminController::class,'indexUsers'])->name('users.index');
    Route::put('users/{user}/edit', [AdminController::class,'editUsers'])->name('users.edit');

    
    
   
    
});
Route::resource('categories',CategorieController::class)->middleware(['admin','responsable','auth']);
Route::resource('sousCategories',SousCategorieController::class)->middleware(['admin','responsable','auth']);

