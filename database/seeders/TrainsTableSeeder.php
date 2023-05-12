<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train; 
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $train = new Train();
            $train->azienda = $faker->randomElement(['Italo', 'Freccia Rossa', 'TGV', 'Trenord']);
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->data_di_partenza = $faker->date();
            $train->data_di_arrivo = $faker->date();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(0, 999999999);
            $train->numero_carrozze = $faker->numberBetween(30, 60);
            $train->in_orario = $faker->boolean();
            $train->save();
        }
    }
}
