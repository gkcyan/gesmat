<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsPetroliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_petroliers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->integer('petrolier_id')->index('fk_transactions_petroliers_petroliers1_idx');
            $table->integer('produit_petrolier_id')->index('fk_transactions_petroliers_produits_petroliers1_idx');
            $table->integer('mode_paiement_id')->index('fk_transactions_petroliers_mode_paiement1_idx');
            $table->integer('activite_log_id')->index('fk_transactions_petroliers_activite_log1_idx');
            $table->integer('carte_grise_id')->index('fk_transactions_petroliers_cartes_grises1_idx');
            $table->integer('qte')->nullable();
            $table->string('date_prise', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions_petroliers');
    }
}
