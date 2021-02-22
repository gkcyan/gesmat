<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChassisCreditColumnsToMaterielMatricules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materiel_matricules', function (Blueprint $table) {
            
    $table->string('chassis')
            ->after('date_edition')
            ->nullable();

    $table->text('societe_credit')
            ->after('chassis')
            ->nullable();

    $table->date('date_contrat_credit')
            ->after('societe_credit')
            ->nullable();
    
    $table->text('main_leve_gage')
            ->after('date_contrat_credit')
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
            $table->dropColumn('chassis', 'societe_credit','date_contrat_credit','main_leve_gage');
        });
    }
}
