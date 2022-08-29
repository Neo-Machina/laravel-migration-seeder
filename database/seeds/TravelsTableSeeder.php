<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $holiday_type_array = [
            'last minute',
            'beach holidays', 
            'holidays in nature', 
            'city trips'
        ];
        // Creo un tot numero di righe nella tabella Travels
        for($i= 1; $i < 4; $i++) {
            // Creazione nuova riga
            $new_travel = new Travel();
            // Popolare le righe
            $new_travel->holiday_type = $holiday_type_array[rand(0,3)];
            $new_travel->hotel =  $faker->lexify();
            $new_travel->price = $faker->randomFloat(2, 50, 9999);
            $new_travel->is_available = rand(0, 1);
            // Salvare la riga
            $new_travel->save();
        }
    }
}
