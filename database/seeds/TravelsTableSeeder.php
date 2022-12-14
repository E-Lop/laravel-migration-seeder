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
        // popola la tabella con 10 righe
        for($i=1; $i<=10; $i++) {
            // crea una nuova riga
            $new_travel = new Travel();
            // popola le righe
            $new_travel->reference = $faker->randomNumber(5, true);
            $new_travel->destinations = $faker->city();
            $new_travel->duration = rand(1, 14);
            $new_travel->price = $faker->randomFloat(2, 300, 2000);
            $new_travel->visa_needed = rand(0, 1);
            $new_travel->is_available = rand(0, 1);
            // salva la riga
            $new_travel->save();
        }
    }
}
