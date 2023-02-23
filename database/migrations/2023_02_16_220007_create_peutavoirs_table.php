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
        Schema::create('peutavoirs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_souscripteur');
            $table->unsignedBigInteger('id_conducteur');
            $table->foreign('id_conducteur')->references('id_conducteur')->on('conducteurs')->onUpdate('cascade')->ondelete('cascade');
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
        Schema::dropIfExists('peutavoirs');
    }
};
