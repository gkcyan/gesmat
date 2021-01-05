<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRequetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requetes', function (Blueprint $table) {
            $table->foreign('requetes_types_id', 'fk_requetes_requetes_types1')->references('id')->on('requetes_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requetes', function (Blueprint $table) {
            $table->dropForeign('fk_requetes_requetes_types1');
        });
    }
}
