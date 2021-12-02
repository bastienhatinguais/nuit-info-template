<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarinCarriere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marin_carriere', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marin_id')->constrained();
            $table->foreignId('carriere_id')->constrained();
            $table->date('dateDebut');
            $table->date('dateFin')->nullable();
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
        //
    }
}
