<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'id' => '3',
            'nis' => '11112',
            'nama'=> 'Awla',
            'jurusan'=> 'RPL',
            'angkatan'=> '24',
            'password' => Hash::make('1111'),
        ]);
    }
}
