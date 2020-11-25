<?php

namespace Database\Seeders;

use App\Models\Profession;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::truncate();
        $this->command->getOutput()->progressStart(100);
        Profession::create([
            'name' => 'BELUM / TIDAK BEKERJA'    
        ]);

        Profession::create([
            'name' => 'MENGURUS RUMAH TANGGA'    
        ]);

        Profession::create([
            'name' => 'PELAJAR / MAHASISWA'    
        ]);

        Profession::create([
            'name' => 'PENSIUNAN'    
        ]);

        Profession::create([
            'name' => 'PEGAWAI NEGRI SIPIL'    
        ]);

        Profession::create([
            'name' => 'TENTARA NASIONAL INDONESIA'    
        ]);

        Profession::create([
            'name' => 'KEPOLISIAN RI'    
        ]);

        Profession::create([
            'name' => 'PEDAGANGAN'    
        ]);

        Profession::create([
            'name' => 'PETANI / PEKEBUN'    
        ]);

        Profession::create([
            'name' => 'PETERNAK'    
        ]);

        Profession::create([
            'name' => 'NELAYAN / PERIKANAN'    
        ]);

        Profession::create([
            'name' => 'INDUSTRI'    
        ]);

        Profession::create([
            'name' => 'KONSTRUKSI'    
        ]);

        Profession::create([
            'name' => 'TRANSPORTASI'    
        ]);

        Profession::create([
            'name' => 'KARYAWAN SWASTA'    
        ]);

        Profession::create([
            'name' => 'KARYAWAN BUMN'    
        ]);

        Profession::create([
            'name' => 'KARYAWAN BUMD'    
        ]);

        Profession::create([
            'name' => 'KARYAWAN HONORER'    
        ]);

        Profession::create([
            'name' => 'BURUH HARIAN LEPAS'    
        ]);

        Profession::create([
            'name' => 'BURUH TANI / PERKEBUNAN'    
        ]);

        Profession::create([
            'name' => 'BURUH NELAYAN / PERIKANAN'    
        ]);

        Profession::create([
            'name' => 'BURUH PETERNAKAN'    
        ]);

        Profession::create([
            'name' => 'PEMBANTU RUMAH TANGGA'    
        ]);

        Profession::create([
            'name' => 'TUKANG CUKUR'    
        ]);

        Profession::create([
            'name' => 'TUKANG LISTRIK'    
        ]);

        Profession::create([
            'name' => 'TUKANG BATU'    
        ]);

        Profession::create([
            'name' => 'TUKANG KAYU'    
        ]);

        Profession::create([
            'name' => 'TUKANG SOL SEPATU'    
        ]);

        Profession::create([
            'name' => 'TUKANG LAS / PANDAI BESI'    
        ]);

        Profession::create([
            'name' => 'TUKANG JAHIT'    
        ]);

        Profession::create([
            'name' => 'TUKANG GIGI'    
        ]);

        Profession::create([
            'name' => 'PENATA RIAS'    
        ]);

        Profession::create([
            'name' => 'PENATA BUSANA'    
        ]);

        Profession::create([
            'name' => 'PENATA RAMBUT'    
        ]);

        Profession::create([
            'name' => 'MEKANIK'    
        ]);

        Profession::create([
            'name' => 'SENIMAN'    
        ]);

        Profession::create([
            'name' => 'TABIB'    
        ]);

        Profession::create([
            'name' => 'PARAJI'    
        ]);

        Profession::create([
            'name' => 'PERANCANG BUSANA'    
        ]);

        Profession::create([
            'name' => 'PENTERJEMAH'    
        ]);

        Profession::create([
            'name' => 'IMAM MASJID'    
        ]);

        Profession::create([
            'name' => 'PENDETA'    
        ]);

        Profession::create([
            'name' => 'PASTOR'    
        ]);

        Profession::create([
            'name' => 'WARTAWAN'    
        ]);

        Profession::create([
            'name' => 'USTADZ / MUBALIGH'    
        ]);

        Profession::create([
            'name' => 'JURU MASAK'    
        ]);

        Profession::create([
            'name' => 'PROMOTOR ACARA'    
        ]);

        Profession::create([
            'name' => 'ANGGOTA DPR RI'    
        ]);

        Profession::create([
            'name' => 'ANGOOTA DPD'    
        ]);

        Profession::create([
            'name' => 'ANGGOTA BPK'    
        ]);

        Profession::create([
            'name' => 'PRESIDEN'    
        ]);

        Profession::create([
            'name' => 'WAKIL PRESIDEN'    
        ]);

        Profession::create([
            'name' => 'ANGGOTA MAHKAMAH KONSTITUSI'    
        ]);

        Profession::create([
            'name' => 'ANGGOTA KABINET / KEMENTRIAN'    
        ]);

        Profession::create([
            'name' => 'DUTA BESAR'    
        ]);

        Profession::create([
            'name' => 'GUBERNUR'    
        ]);

        Profession::create([
            'name' => 'WAKIL GUBERNUR'    
        ]);

        Profession::create([
            'name' => 'BUPATI'    
        ]);

        Profession::create([
            'name' => 'WAKIL BUPATI'    
        ]);

        Profession::create([
            'name' => 'WALIKOTA'    
        ]);

        Profession::create([
            'name' => 'WAKIL WALIKOTA'    
        ]);

        Profession::create([
            'name' => 'ANGGOTA DPRD PROVINSI'    
        ]);

        Profession::create([
            'name' => 'ANGGOTA DPRD KABUPATEN / KOTA'    
        ]);

        Profession::create([
            'name' => 'DOSEN'    
        ]);

        Profession::create([
            'name' => 'GURU'    
        ]);

        Profession::create([
            'name' => 'PILOT'    
        ]);

        Profession::create([
            'name' => 'PENGACARA'    
        ]);

        Profession::create([
            'name' => 'NOTARIS'    
        ]);

        Profession::create([
            'name' => 'ARSITEK'    
        ]);

        Profession::create([
            'name' => 'AKUNTAN'    
        ]);

        Profession::create([
            'name' => 'KONSULTAN'    
        ]);

        Profession::create([
            'name' => 'DOKTER'    
        ]);

        Profession::create([
            'name' => 'BIDAN'    
        ]);

        Profession::create([
            'name' => 'PERAWAT'    
        ]);

        Profession::create([
            'name' => 'APOTEKER'    
        ]);

        Profession::create([
            'name' => 'PSIKIATER / PSIKOLOG'    
        ]);

        Profession::create([
            'name' => 'PENYIAR TELEVISI'    
        ]);

        Profession::create([
            'name' => 'PENYIAR RADIO'    
        ]);

        Profession::create([
            'name' => 'PELAUT'
        ]);

        Profession::create([
            'name' => 'PENELITI'    
        ]);

        Profession::create([
            'name' => 'SOPIR'    
        ]);

        Profession::create([
            'name' => 'PIALANG'    
        ]);

        Profession::create([
            'name' => 'PARANORMAL'    
        ]);

        Profession::create([
            'name' => 'PEDAGANG'    
        ]);

        Profession::create([
            'name' => 'PERANGKAT DESA'    
        ]);

        Profession::create([
            'name' => 'KEPALA DESA'    
        ]);

        Profession::create([
            'name' => 'BIARAWATI'    
        ]);
        $this->command->getOutput()->progressAdvance();

        Profession::create([
            'name' => 'WIRASWASTA'    
        ]);
        $this->command->getOutput()->progressFinish();
    }
}
