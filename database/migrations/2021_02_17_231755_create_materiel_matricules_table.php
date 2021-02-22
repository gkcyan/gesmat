<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielMatriculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiel_matricules', function (Blueprint $table) {
            $table->id();
            $table->string('matricule',8)->unique();
            $table->string('num_carte_grise', 14)->unique();
            $table->text('propietraire')->nullable();
            $table->foreignId('materiel_marque_id')->constrained('materiel_marques'); //$table->text('marque')->nullable();
            $table->foreignId('materiel_type_id')->constrained('materiel_types');//$table->text('genre')->nullable();
            $table->foreignId('materiel_modele_id')->constrained('materiel_modeles');//$table->text('type_commerciale')->nullable();
            $table->text('couleur')->nullable();
            $table->text('carosserie')->nullable();
            $table->foreignId('carb_produit_id')->constrained('carb_produits'); //$table->text('energie')->nullable();
            $table->text('place_assise')->nullable();
            $table->text('ptac')->nullable();
            $table->text('pv')->nullable();
            $table->text('cu')->nullable();
            $table->text('usage')->nullable();
            $table->text('puissance_fiscale')->nullable();
            $table->text('essieu')->nullable();
            $table->text('cylindre')->nullable();
            $table->date('date_premiere_mc')->nullable();
            $table->date('date_edition')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiel_matricules');
    }
}
