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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id('id_vehicule');
            $table->string('immatriculation');
            $table->string('type_mine');
            $table->string('poids_en_charge');
            $table->integer('puissance_fiscale');
            $table->string('nombre_de_place');
            $table->enum('combution', ['diesel', 'essence']);
            $table->enum('usage', ['Usage Tourisme','Transport De Marchandise','Transport De Votre Personnel','Cyclomoteurs','Divers']);
            $table->date('mise_en_circulation');
            $table->string('cylindre');
            $table->unsignedBigInteger('id_marque');
            $table->unsignedBigInteger('id_souscripteur');
            $table->foreign('id_marque')->references('id_marque')->on('marques')->onUpdate('cascade')->ondelete('cascade');
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
        Schema::dropIfExists('vehicules');
    }
};
