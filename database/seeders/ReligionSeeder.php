<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::truncate();
        $this->command->getOutput()->progressStart(100);

        Religion::create([
            'name' => 'ISLAM'
        ]);

        Religion::create([
            'name' => 'PROTESTAN'
        ]);
        
        Religion::create([
            'name' => 'KATOLIK'
        ]);
        $this->command->getOutput()->progressAdvance();
        
        Religion::create([
            'name' => 'HINDU'
        ]);
        
        Religion::create([
            'name' => 'BUDDHA'
        ]);
        
        Religion::create([
            'name' => 'KHONGHUCU'
        ]);
        $this->command->getOutput()->progressFinish();
    }
}
