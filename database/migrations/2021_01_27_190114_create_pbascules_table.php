<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbasculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbascules', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 45);
            $table->text('description')->nullable();
            $table->text('localisation')->nullable();
            $table->string('email', 45);
            $table->string('exploitant');
            $table->string('contact');
            $table->string('type');
            $table->foreignId('entreprise_id')->constrained('entreprises');
            $table->foreignId('site_id')->constrained('sites');
            $table->foreignId('direction_id')->constrained('directions');
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('zone_id')->constrained('zones');
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
        Schema::dropIfExists('pbascules');
    }
}
