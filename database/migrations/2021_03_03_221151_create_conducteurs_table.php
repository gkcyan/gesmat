<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('nationalite');
            $table->string('matrimoniale');
            $table->integer('nb_enfant')->nullable();
            $table->date('date_naissance'); 
            $table->date('date_embauche');   
            //$table->text('pv')->nullable();
            $table->foreignId('site_id')->constrained('sites')->nullable();
            $table->foreignId('conducteur_categorie_id')->constrained('conducteur_categories');        
            $table->string('matricule')->unique()->nullable();
            $table->string('cnps')->unique()->nullable();
            $table->string('email')->unique()->nullable();
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
        Schema::dropIfExists('conducteurs');
    }
}
