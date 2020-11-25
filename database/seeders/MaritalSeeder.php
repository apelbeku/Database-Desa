<?php

namespace Database\Seeders;

use App\Models\Marital;
use Illuminate\Database\Seeder;

class MaritalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marital::truncate();
        $this->command->getOutput()->progressStart(100);
        
        Marital::create([
            'name' => 'BELUM KAWIN'
        ]);

        Marital::create([
            'name' => 'KAWIN'
        ]);
        $this->command->getOutput()->progressAdvance();

        Marital::create([
            'name' => 'CERAI HIDUP'
        ]);

        Marital::create([
            'name' => 'CERAI MATI'
        ]);
        $this->command->getOutput()->progressFinish();
    }
}
