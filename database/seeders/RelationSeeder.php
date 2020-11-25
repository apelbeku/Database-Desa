<?php

namespace Database\Seeders;

use App\Models\Relation;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Relation::truncate();
        $this->command->getOutput()->progressStart(100);

        Relation::create([
            'name' => 'KEPALA KELUARGA'
        ]);

        Relation::create([
            'name' => 'SUAMI'
        ]);

        Relation::create([
            'name' => 'ISTERI'
        ]);

        Relation::create([
            'name' => 'ANAK'
        ]);

        Relation::create([
            'name' => 'MANANTU'
        ]);

        Relation::create([
            'name' => 'CUCU'
        ]);

        Relation::create([
            'name' => 'ORANG TUA'
        ]);
        $this->command->getOutput()->progressAdvance();

        Relation::create([
            'name' => 'MERTUA'
        ]);

        Relation::create([
            'name' => 'FAMILI LAIN'
        ]);

        Relation::create([
            'name' => 'PEMBANTU'
        ]);

        Relation::create([
            'name' => 'LAINNYA'
        ]);
        $this->command->getOutput()->progressFinish();
    }
}
