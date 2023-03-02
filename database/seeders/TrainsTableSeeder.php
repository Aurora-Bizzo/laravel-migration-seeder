<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<=10; $i++)
        {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->word();
            $newTrain->Stazione_di_partenza = $faker->word();
            $newTrain->Stazione_di_arrivo = $faker->word();
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->asciify('********************');
            $newTrain->Numero_di_Carrozze = $faker->numberBetween(14, 20);
            $newTrain->In_orario = $faker->randomElement([true,false]);
            $newTrain->cancellato = $faker->randomElement([true,false]);
            $newTrain->save();
        }
    }
}
