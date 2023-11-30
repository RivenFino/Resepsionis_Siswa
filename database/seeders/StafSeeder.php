<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staf')->insert([
            'nip' => '101',
            'nama'=> 'Awla',
            'no_telepon'=> '083141976277',
            'password' => Hash::make('101'),
        ]);
    }
}
