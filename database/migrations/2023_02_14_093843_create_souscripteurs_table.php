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
        Schema::create('souscripteurs', function (Blueprint $table) {
            $table->id('id_souscripteur');
            $table->enum('nature', ['physique', 'morale']);
            $table->string('cin');
            $table->string('rc');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->enum('sexe', ['homme', 'femme']);
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_postale');
            $table->string('tel');
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
        Schema::dropIfExists('souscripteurs');
    }
};
