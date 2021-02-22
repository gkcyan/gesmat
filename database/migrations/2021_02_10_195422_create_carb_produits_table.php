<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarbProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carb_produits', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 45)->unique();
            $table->text('description')->nullable();
            $table->foreignId('carb_categorie_id')->constrained('carb_categories');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carb_produits');
    }
}
