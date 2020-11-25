<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProfessionSeeder::class,
            EducationSeeder::class,
            MaritalSeeder::class,
            ReligionSeeder::class,
            RelationSeeder::class,
            FamilyCardSeeder::class,
            IndividualSeeder::class
        ]);
    }
}