<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterielsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materiels_documents', function (Blueprint $table) {
            $table->foreign('cartes_grises_id', 'fk_materiels_documents_cartes_grises1')->references('id')->on('cartes_grises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('documents_id', 'fk_materiels_documents_documents1')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiels_documents', function (Blueprint $table) {
            $table->dropForeign('fk_materiels_documents_cartes_grises1');
            $table->dropForeign('fk_materiels_documents_documents1');
        });
    }
}
