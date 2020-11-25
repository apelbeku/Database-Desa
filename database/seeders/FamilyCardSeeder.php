<?php

namespace Database\Seeders;

use App\Models\FamilyCard;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FamilyCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyCard::truncate();
        $faker = Factory::create('id_ID');
        $this->command->getOutput()->progressStart(20);

        for ($i=0; $i < 20; $i++) { 
            FamilyCard::create([
                'number_kk' => rand(1111111111111111, 9999999999999999),
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
