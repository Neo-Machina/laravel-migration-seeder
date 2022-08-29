<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creo un tot numero di righe nella tabella Travels
        for($i; $i < 3; $i++) {
            $new_travel = new Travel;
             
        }
    }
}
