<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id('id_contrat');
            $table->date('date_de_debut');
            $table->date('date_de_fin');
            $table->string('montant_prime');
            $table->unsignedBigInteger('id_souscripteur');
            $table->foreign('id_souscripteur')->references('id_souscripteur')->on('souscripteurs')->onUpdate('cascade')->ondelete('cascade');

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
        Schema::dropIfExists('contrats');
    }
};
