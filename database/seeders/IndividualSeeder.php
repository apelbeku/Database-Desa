<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Marital;
use App\Models\Relation;
use App\Models\Religion;
use App\Models\Education;
use App\Models\Individual;
use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Individual::truncate();
        $faker = Factory::create('id_ID');
        $profession = DB::table('professions')->count();
        $education = DB::table('educations')->count();
        $marital = DB::table('maritals')->count();
        $religion = DB::table('religions')->count();
        $relation = DB::table('relations')->count();
        $family_card = DB::table('family_cards')->count();  
        $this->command->getOutput()->progressStart(100);

        for ($i=0; $i < 100; $i++) {
            $gender = rand(0, 1);
            
            Individual::create([
                'name' => $gender ? $faker->firstNameMale() : $faker->firstNameFemale(),
                'profession_id' => rand(1, $profession),
                'education_id' => rand(1, $education),
                'marital_id' => rand(1, $marital),
                'religion_id' => rand(1, $religion),
                'relation_id' => rand(1, $relation),
                'family_card_id' => rand(1, $family_card),
                'nik' => $faker->nik(),
                'gender' => $gender,
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'citizenship' => rand(1, 0),
                'father' => $faker->name($gender = 'male'),
                'mother' => $faker->name($gender = 'female'),
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}

