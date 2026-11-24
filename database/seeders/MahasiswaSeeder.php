<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Jovi',
            'nim' => '13597920017',
            'prodi' => 'Sastra Mesin',
            'email' => 'jjovi@gmail.com',
            'nohp' => '082179000097',
            'foto' => 'path/to/foto.jpg',

        ]);

        Mahasiswa::create([
        'nama' => 'Kirby',
        'nim' => '13242520071',
        'prodi' => 'Teknik Kedokteran',
        'email' => 'kirby@gmail.com',
        'nohp' => '082179000098',
        'foto' => 'path/to/foto.jpg',
        ]);
        
    }
}
