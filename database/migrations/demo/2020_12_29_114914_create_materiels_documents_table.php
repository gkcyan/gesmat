<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels_documents', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
            $table->date('date_etabli')->nullable();
            $table->integer('validite')->nullable();
            $table->string('cout', 45)->nullable();
            $table->string('reference', 45)->nullable();
            $table->string('observations', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->integer('cartes_grises_id')->index('fk_materiels_documents_cartes_grises1_idx');
            $table->integer('documents_id')->index('fk_materiels_documents_documents1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels_documents');
    }
}
