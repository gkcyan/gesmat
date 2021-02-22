<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActifEntrepriseTypeColumnsToMaterielMatricules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materiel_matricules', function (Blueprint $table) {
            // ajout des colonnes 

            $table->integer('actif')
                    ->after('date_edition')
                    ->nullable();

            $table->integer('entreprise_type')
                    ->after('actif')
                    ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiel_matricules', function (Blueprint $table) {
            //
            $table->dropColumn('actif', 'entreprise_type');
        });
    }
}
