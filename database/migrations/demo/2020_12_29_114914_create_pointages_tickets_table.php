<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages_tickets', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_pointage')->unique('ref_pointage_UNIQUE');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->string('ticket_arrive', 45)->nullable();
            $table->string('ticket_depart', 45)->nullable();
            $table->string('transporteur_prive')->nullable();
            $table->string('tonnage_depart', 45)->nullable();
            $table->date('date_depart')->nullable();
            $table->string('tonnage_arrive', 45)->nullable();
            $table->date('date_arrive')->nullable();
            $table->string('matricule_engin', 45)->nullable();
            $table->string('ecart_poids', 45)->nullable();
            $table->string('cout_ecart_poids', 45)->nullable();
            $table->string('origine', 45)->nullable();
            $table->string('arrive', 45)->nullable();
            $table->string('cout_transport', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages_tickets');
    }
}
