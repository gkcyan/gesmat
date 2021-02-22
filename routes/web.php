<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Entreprises;
use App\Http\Livewire\MatMatricule\MatriculeTable;
use App\Http\Controllers\Pdfcontroller;
use App\Http\Controllers\Tablecontroller;
use App\Models\MaterielMatricule;

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

Route::get('home', function () {
    return view('welcome');
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

    /**Module Parc */
    Route::get('parc', function () {
        return view('dashboard');
    })->name('parc');

        Route::get('materiel', [MatriculeTable::class,'index'])->name('materiel');
        
        Route::get('mat_marque', function () {
            return view('livewire.Mat-marque.index');
        })->name('mat_marque');

        Route::get('mat_modele', function () {
            return view('livewire.mat-modele.index');
        })->name('mat_modele');

        Route::get('mat_type', function () {
            return view('livewire.Mat-type.index');
        })->name('mat_type');

        Route::get('mat_categorie', function () {
            return view('livewire.mat-categorie.index');
        })->name('mat_categorie');

    /** Fin module Parc */


    Route::get('maintenance', function () {
        return view('dashboard');
    })->name('maintenance');


    /** Debut module de gestion des consommations */
    Route::get('consommable', function () {
        return view('dashboard');
    })->name('consommable');

        Route::get('carburant', function () {
            return view('dashboard');
        })->name('carburant');

            Route::get('carb_categorie', function () {
                return view('livewire.carb-categorie.index');
            })->name('carb_categorie');

            Route::get('carb_produit', function () {
                return view('livewire.carb-produit.index');
            })->name('carb_produit');

            Route::get('carb_petrolier', function () {
                return view('livewire.carb-categorie.index');
            })->name('carb_petrolier');

            Route::get('carb_tarif', function () {
                return view('livewire.carb-categorie.index');
            })->name('carb_tarif');





    Route::get('piece_det', function () {
        return view('dashboard');
    })->name('piece_det');

    Route::get('fournisseur', function () {
        return view('dashboard');
    })->name('fournisseur');

    Route::get('logistique', function () {
        return view('dashboard');
    })->name('logistique');

    Route::get('achat', function () {
        return view('dashboard');
    })->name('achat');


    /** Module de Paramétrage */
        Route::get('parametrage', function () {
            return view('dashboard');
        })->name('parametrage');

            Route::get('entreprise', function () {
                return view('entreprise');
            })->name('entreprise');

            Route::get('site', function () {
                return view('livewire.sites');
            })->name('site');

            
            Route::get('direction', function () {
                return view('livewire.direction.directions');
            })->name('direction');

            Route::get('service', function () {
                return view('livewire.services.service');
            })->name('service');

            Route::get('pbascule', function () {
                return view('livewire.pbascules.pbascule');
            })->name('pbascule');

            Route::get('gencadrement', function () {
                return view('livewire.gencadrements.gencardement');
            })->name('gencadrement');
            
            Route::get('zone', function () {
                return view('livewire.zones.index');
            })->name('zone');
            
            Route::get('plantation', function () {
                return view('livewire.plantations.index');
            })->name('plantation');
            
    /** Fin module de Paramétrage */

    Route::get('transp_prive', function () {
        return view('dashboard');
    })->name('transp_prive');

    Route::get('appli', function () {
        return view('dashboard');
    })->name('appli');
    
    

   


    Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generate-pdf');
    Route::get('tablePDF', [PDFController::class, 'tablePDF'])->name('tablePDF');
});




//Route::get('entreprise',Entreprises::class);