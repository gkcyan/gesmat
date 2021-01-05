<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_entreprises', function (Blueprint $table) {
            $table->integer('id', true);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('entreprise_id')->index('service_entreprise_entreprises_index');
            $table->unsignedInteger('service_id')->index('service_entreprise_services_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_entreprises');
    }
}
