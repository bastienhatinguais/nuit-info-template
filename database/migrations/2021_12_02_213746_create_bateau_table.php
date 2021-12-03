<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBateauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateaus', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type_bateau');
            $table->string('origine');
            $table->integer('dimension');
            $table->string('description')->nullable();
            $table->boolean('est_valide');
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
        Schema::dropIfExists('bateaux');
    }
}
