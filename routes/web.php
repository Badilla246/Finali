<?php
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\GCashController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\QRController;

Route::get('/', function () {
    return view('home');
});

Route::get('/foods', [FoodsController::class, 'index']);
Route::get('/drinks', [DrinksController::class, 'drinks']);

Route::get('/types', function () {
    return view('types');
});
Route::get('/typesdrinks', function () {
    return view('typesdrinks');
});

Route::get('/back', function () {
    return view('home');
});

Route::get('/qr', [QRController::class, 'index']);
Route::post('/generate-qr', [QRController::class, 'generateQR']);

Route::get('/reservations/csv', [FoodsController::class, 'exportToCsv'])->name('food.csv');
Route::get('/foods/pdf',[FoodsController::class, 'pdf']);

Route::get('/gcash', [GCashController::class, 'index']);

Route::post('/drinks/csv-import', [DrinksController::class, 'importCsv'])->name('drinks.importCsv');
Route::delete('/drinks/{drink}', [DrinksController::class, 'destroy'])->name('drinks.destroy');

