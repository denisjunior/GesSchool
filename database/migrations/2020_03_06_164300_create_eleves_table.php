<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule', 10);
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->date('datenaiss');
            $table->string('lieuNaiss',100);
            $table->char('sexe',1);
            $table->string('ecoleprovenance',100);
            $table->string('nomPere',100);
            $table->integer('contactPere');
            $table->string('nomMere',100);
            $table->integer('contactMere');
            $table->integer('numTel');
            $table->string('quartier',100);
            $table->char('serie',3);
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::dropIfExists('eleves');
    }
}
