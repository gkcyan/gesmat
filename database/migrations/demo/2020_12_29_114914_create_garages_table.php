<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle')->unique('libelle_UNIQUE');
            $table->timestamps();
            $table->softDeletes();
            $table->string('adresse')->nullable();
            $table->unsignedInteger('agence_id')->index('garage_agences_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garages');
    }
}
