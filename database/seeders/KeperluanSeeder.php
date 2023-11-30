<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeperluanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keperluan')->insert([
            'kode_keperluan' => '23222',
            'id_siswa' => '1',
            'keperluan' => 'keluar sekolah',
            'keterangan' => '543221',
            'tanggal' => now()->toDateString(),
            'waktu' => now()->toTimeString(),
        ]);
    }
}

