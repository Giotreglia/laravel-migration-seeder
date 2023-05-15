<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train; 
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Functions\Helpers;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // Seeding con Faker
    /* public function run(Faker $faker)
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
    } */

    // Seeding da file .csv

    public function run() {

        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            
/*             $departureTimes = explode(" ", $row[3]);
            $departureDate = $departureTimes[0];
            $departureTime = $departureTimes[1];

            $arrivalTimes = explode(" ", $row[4]);
            $arrivalDate = $arrivalTimes[0];
            $arrivalTime = $arrivalTimes[1]; */

            if ($index > 0) {
                $newTrain = new Train();
                $newTrain->azienda = $row[0];
                $newTrain->stazione_di_partenza = $row[1];
                $newTrain->stazione_di_arrivo = $row[2];
/*                 $newTrain->data_di_partenza = $departureDate;
                $newTrain->data_di_arrivo = $arrivalDate;
                $newTrain->orario_di_partenza = $departureTime;
                $newTrain->orario_di_arrivo = $arrivalTime; */
                $newTrain->codice_treno = $row[5];
                $newTrain->numero_carrozze = $row[6];
                $newTrain->in_orario = $row[7];
                $newTrain->cancellato = $row[8];
                $newTrain->save();
            }
        }
    }
}
