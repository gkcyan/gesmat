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
            
            $table->id();            
            $table->string('denomination', 45)->nullable();
            $table->string('nom_commercial', 45)->nullable();
            $table->string('sigle', 45)->nullable();
            $table->string('rcm', 45)->unique();
            $table->string('ncc', 45)->unique();
            $table->string('adresse', 45)->nullable();
            $table->string('forme_juridique', 45)->nullable();
            $table->string('capital', 45)->nullable();
            $table->string('image', 45)->nullable();
            $table->string('actif', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();

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
