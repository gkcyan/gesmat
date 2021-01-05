<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGaragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('garages', function (Blueprint $table) {
            $table->foreign('agence_id', 'garage_agences_foreign')->references('id')->on('agences')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('garages', function (Blueprint $table) {
            $table->dropForeign('garage_agences_foreign');
        });
    }
}
