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
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->id('id_conducteur');
            $table->enum('lien_avec_souscripteur', ['lui-meme', 'autre']);
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->enum('sexe', ['homme', 'femme']);
            $table->enum('etat_civil', ['celibatire', 'marie']);
            $table->date('date_de_permis');
            $table->string('num_permis');
            $table->string('categorie_permis');
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
        Schema::dropIfExists('conducteurs');
    }
};
