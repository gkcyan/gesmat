<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServicesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services_models', function (Blueprint $table) {
            $table->foreign('interfaces_id', 'fk_services_models_interfaces1')->references('id')->on('interfaces')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('services_id', 'fk_services_models_services1')->references('id')->on('services')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_models', function (Blueprint $table) {
            $table->dropForeign('fk_services_models_interfaces1');
            $table->dropForeign('fk_services_models_services1');
        });
    }
}
