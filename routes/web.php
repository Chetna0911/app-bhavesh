<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

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

Route::get('/form', function () {
    return view('form');
});
Route::get('/invoice-form',[PdfController::class, 'showForm']);

Route::post('/generate-pdf', [PdfController::class, 'generatePdf'])->name('generate-pdf');
Route::post('/invoice-form', [PdfController::class, 'createInvoicePdf'])->name('create-pdf');


Route::get('/', function () {
    return view('welcome');
});
