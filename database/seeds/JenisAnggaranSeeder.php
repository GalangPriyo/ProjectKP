<?php

use App\JenisAnggaran;
use Illuminate\Database\Seeder;

class JenisAnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisAnggaran::create([
            'id'    => 1,
            'nama'  => 'PENDAPATAN'
        ]);
        JenisAnggaran::create([
            'id'    => 2,
            'nama'  => 'BELANJA'
        ]);
        JenisAnggaran::create([
            'id'    => 3,
            'nama'  => 'PEMBIAYAAN'
        ]);
    }
}
