<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::truncate();
        $this->command->getOutput()->progressStart(100);
        Education::create([
            'name' => 'TIDAK / BELUM SEKOLAH'
        ]);

        Education::create([
            'name' => 'TAMAT SD / SEDERAJAT'
        ]);

        Education::create([
            'name' => 'SLTP / SEDERAJAT'
        ]);

        Education::create([
            'name' => 'SLTA / SEDERAJAT'
        ]);

        Education::create([
            'name' => 'BELUM TAMAT SD / SEDERAJAT'
        ]);

        Education::create([
            'name' => 'DIPLOMA IV / STRATA I'
        ]);

        Education::create([
            'name' => 'AKADEMI DIPLOMA III /S. MUDA'
        ]);
        
        Education::create([
            'name' => 'DIPLOMA I / II'
        ]);

        Education::create([
            'name' => 'STRATA II'
        ]);
        $this->command->getOutput()->progressAdvance();

        Education::create([
            'name' => 'STRATA III'
        ]);
        $this->command->getOutput()->progressFinish();

    }
}
