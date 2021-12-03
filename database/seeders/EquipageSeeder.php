<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EquipageSeeder extends Seeder
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
            'type_bateau' => Str::random(10),
            'origine' => Str::random(10),
            'dimension' => rand(1, 10)
            'description' => Str::random(30),

          ]);
        }
    }
}
