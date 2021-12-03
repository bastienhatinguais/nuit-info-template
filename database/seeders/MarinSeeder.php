<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


      for ($i=0; $i < 5 ; $i++) {

        DB::table('equipages')->insert([
          'nom' => Str::random(10),
          'prenom' => Str::random(10),
          'nbSauvetage' => rand(1, 10)
          'dateNaissance' => Carbon::now(),
          'dateMort' => Carbon::now(),
          'lieuMort' => Str::random(10),
          'description' => Str::random(10),
        ]);
      }



    }
}
