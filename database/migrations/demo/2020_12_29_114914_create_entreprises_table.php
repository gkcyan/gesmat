<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique('id');
            $table->char('libelle');
            $table->text('actif');
            $table->timestamps();
            $table->softDeletes();
            $table->string('denomination', 45)->nullable();
            $table->string('nom_commercial', 45)->nullable();
            $table->string('sigle', 45)->nullable();
            $table->string('adresse', 45)->nullable();
            $table->string('forme_juridique', 45)->nullable();
            $table->string('capital', 45)->nullable();
            $table->string('image', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
