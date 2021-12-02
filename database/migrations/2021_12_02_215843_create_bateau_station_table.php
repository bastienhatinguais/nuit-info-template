<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBateauStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateau_station', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bateau_id')->constrained();
            $table->foreignId('station_id')->constrained();
            $table->date("date_acquisition");
            $table->date("date_remise")->nullable();;
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
        Schema::dropIfExists('bateau_station');
    }
}
