<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pegawai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'id_pegawai' => Str::random(10),
            'nama_pegawai' => Str::random(10),
            'jabatan_pegawai' => Str::random(10),
            'umur_pegawai' => Str::random(2),
            'alamat_pegawai' => Str::random(50),
        ]);

        User::factory()
        ->count(2)
        ->create();
    }
}
