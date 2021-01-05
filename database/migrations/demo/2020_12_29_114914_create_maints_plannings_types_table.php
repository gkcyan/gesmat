<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintsPlanningsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maints_plannings_types', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
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
        Schema::dropIfExists('maints_plannings_types');
    }
}
