<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSauvetagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauvetages', function (Blueprint $table) {
            $table->id();

            $table->date("annee_sauvetage");
            $table->int("nb_sauves");
            $table->int("nb_deces");
            $table->string("descritpion")->nullable();;

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
        Schema::dropIfExists('sauvetages');
    }
}
