<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcesDetsOrganesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pces_dets_organes', function (Blueprint $table) {
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
            $table->text('observation')->nullable();
            $table->integer('pces_dets_composants_id')->index('fk_pces_dets_organes_pces_dets_composants1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pces_dets_organes');
    }
}
