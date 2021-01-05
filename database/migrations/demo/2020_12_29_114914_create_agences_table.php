<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->char('libelle');
            $table->char('entreprise_libelle');
            $table->unsignedInteger('entreprise_id')->index('agences_entreprises_index');
            $table->timestamps();
            $table->softDeletes();
            $table->string('testa', 12);
            $table->string('ajout', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agences');
    }
}
