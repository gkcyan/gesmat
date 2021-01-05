<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactionsPetroliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions_petroliers', function (Blueprint $table) {
            $table->foreign('activite_log_id', 'fk_transactions_petroliers_activite_log1')->references('id')->on('logs_activites')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('carte_grise_id', 'fk_transactions_petroliers_cartes_grises1')->references('id')->on('cartes_grises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('mode_paiement_id', 'fk_transactions_petroliers_mode_paiement1')->references('id')->on('modes_paiements')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('petrolier_id', 'fk_transactions_petroliers_petroliers1')->references('id')->on('petroliers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('produit_petrolier_id', 'fk_transactions_petroliers_produits_petroliers1')->references('id')->on('produits_petroliers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions_petroliers', function (Blueprint $table) {
            $table->dropForeign('fk_transactions_petroliers_activite_log1');
            $table->dropForeign('fk_transactions_petroliers_cartes_grises1');
            $table->dropForeign('fk_transactions_petroliers_mode_paiement1');
            $table->dropForeign('fk_transactions_petroliers_petroliers1');
            $table->dropForeign('fk_transactions_petroliers_produits_petroliers1');
        });
    }
}
