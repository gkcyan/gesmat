<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvariesAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaries_achats', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_br');
            $table->text('designation')->nullable();
            $table->string('ref_constructeur', 45)->nullable();
            $table->string('unite', 45)->nullable();
            $table->string('quantite', 45)->nullable();
            $table->string('prix_estim', 45)->nullable();
            $table->string('prix_total', 45)->nullable();
            $table->string('observation', 45)->nullable();
            $table->string('demandeur', 45)->nullable();
            $table->date('date_demandeur')->nullable();
            $table->string('valide_demandeur', 45)->nullable();
            $table->string('controleur', 45)->nullable();
            $table->string('imputation', 45)->nullable();
            $table->date('date_controleur')->nullable();
            $table->string('valide_controleur', 45)->nullable();
            $table->string('moyens_generaux', 45)->nullable();
            $table->string('date_mg', 45)->nullable();
            $table->string('valide_mg', 45)->nullable();
            $table->string('prix_mg', 45)->nullable();
            $table->string('quantite_mg', 45)->nullable();
            $table->string('observation_mg', 45)->nullable();
            $table->string('ref_const_mg', 45)->nullable();
            $table->string('designation_mg', 45)->nullable();
            $table->string('fournisseur_mg', 45)->nullable();
            $table->string('contact_fournisseur_mg', 45)->nullable();
            $table->string('direction_gene', 45)->nullable();
            $table->date('date_dg')->nullable();
            $table->string('valide_dg', 45)->nullable();
            $table->string('statut', 45)->nullable();
            $table->date('date_statut')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->string('code_article', 45)->nullable();
            $table->string('image_br', 45)->nullable();
            $table->integer('avaries_expertises_id')->index('fk_requetes_copy1_avaries_expertises1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaries_achats');
    }
}
