<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbsExtractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbs_extractions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('num_ticket', 45)->nullable();
            $table->string('date_sortie', 25)->nullable();
            $table->time('heure_sortie')->nullable();
            $table->date('date_entree')->nullable();
            $table->time('heure_entree')->nullable();
            $table->string('camion', 10)->nullable();
            $table->string('citerne', 10)->nullable();
            $table->string('code_client', 45)->nullable();
            $table->string('client', 45)->nullable();
            $table->string('code_produit', 45)->nullable();
            $table->string('produit', 45)->nullable();
            $table->string('code_origine', 45)->nullable();
            $table->string('origine', 45)->nullable();
            $table->string('origine_reelle', 45)->nullable();
            $table->string('code_type_de_vehicule', 45)->nullable();
            $table->string('type_de_vehicule', 45)->nullable();
            $table->string('code_nom_chaufffeur', 45)->nullable();
            $table->string('nom_chaufffeur', 45)->nullable();
            $table->string('code_nom_transporteur', 45)->nullable();
            $table->string('nom_transporteur', 45)->nullable();
            $table->string('code_type_operation', 45)->nullable();
            $table->string('type_operation', 45)->nullable();
            $table->string('n_recette', 10)->nullable();
            $table->string('n_bon_enlevement', 10)->nullable();
            $table->string('n_liasse', 45)->nullable();
            $table->string('n_facture', 45)->nullable();
            $table->string('nom_chauf_prive', 45)->nullable();
            $table->string('nom_client_part', 10)->nullable();
            $table->string('poids_declare', 10)->nullable();
            $table->string('observation', 10)->nullable();
            $table->string('poids_entree', 10)->nullable();
            $table->string('poids_sortie', 10)->nullable();
            $table->string('poids_net', 10)->nullable();
            $table->string('ecart', 10)->nullable();
            $table->string('type_pesee', 10)->nullable();
            $table->string('transaction', 10)->nullable();
            $table->string('code_societe', 45)->nullable();
            $table->string('raison_sociale', 45)->nullable();
            $table->string('1_peseur', 45)->nullable();
            $table->string('2_peseur', 45)->nullable();
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
        Schema::dropIfExists('pbs_extractions');
    }
}
