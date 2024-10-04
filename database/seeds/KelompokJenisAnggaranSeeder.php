<?php

use App\KelompokJenisAnggaran;
use Illuminate\Database\Seeder;

class KelompokJenisAnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KelompokJenisAnggaran::create([
            'id'                => 11,
            'nama'              => 'Pendapatan Asli Desa'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 12,
            'nama'              => 'Pendapatan transfer'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 13,
            'nama'              => 'Pendapatan Lain-lain'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 21,
            'nama'              => 'BIDANG PENYELENGGARAN PEMERINTAHAN DESA'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 22,
            'nama'              => 'BIDANG PELAKSANAAN PEMBANGUNAN DESA'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 23,
            'nama'              => 'BIDANG PEMBINAAN KEMASYARAKATAN'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 24,
            'nama'              => 'BIDANG PEMBERDAYAAN MASYARAKAT'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 25,
            'nama'              => 'BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 31,
            'nama'              => 'Penerimaan Biaya'
        ]);

        KelompokJenisAnggaran::create([
            'id'                => 32,
            'nama'              => 'Pengeluaran Biaya'
        ]);
    }
}
