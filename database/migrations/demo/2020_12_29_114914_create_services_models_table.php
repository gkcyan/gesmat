<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_models', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('is_active')->nullable()->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('interfaces_id')->index('fk_services_models_interfaces1_idx');
            $table->unsignedInteger('services_id')->index('fk_services_models_services1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_models');
    }
}
