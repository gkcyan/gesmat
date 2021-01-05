<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Entreprises;
use App\Http\Controllers\Pdfcontroller;

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
    return view('auth.login');
});

Route::get('contact', function () {
    return view('components.contact');
})->name('contact');

Route::get('page', function () {
    return view('components.page');
})->name('page');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('parc', function () {
        return view('dashboard');
    })->name('parc');

    Route::get('maintenance', function () {
        return view('dashboard');
    })->name('maintenance');

    Route::get('consommable', function () {
        return view('dashboard');
    })->name('consommable');

    Route::get('piece_det', function () {
        return view('dashboard');
    })->name('piece_det');

    Route::get('fournisseur', function () {
        return view('dashboard');
    })->name('fournisseur');

    Route::get('parametrage', function () {
        return view('dashboard');
    })->name('parametrage');

    Route::get('logistique', function () {
        return view('dashboard');
    })->name('logistique');

    Route::get('achat', function () {
        return view('dashboard');
    })->name('achat');

    Route::get('transp_prive', function () {
        return view('dashboard');
    })->name('transp_prive');

    Route::get('appli', function () {
        return view('dashboard');
    })->name('appli');
    
    Route::get('entreprise', function () {
        return view('entreprise');
    })->name('entreprise');
});



//Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
//Route::get('entreprise',Entreprises::class);