<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsMarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels_marques', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
            $table->string('observation')->nullable();
            $table->string('fabricant', 45)->nullable();
            $table->string('site_fabricant', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels_marques');
    }
}
