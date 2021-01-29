<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 45);
            $table->text('description')->nullable();
            $table->string('email', 45);
            $table->foreignId('entreprise_id')->constrained('entreprises');
            $table->foreignId('site_id')->constrained('sites');
            $table->foreignId('direction_id')->constrained('directions');
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
        Schema::dropIfExists('services');
    }
}
