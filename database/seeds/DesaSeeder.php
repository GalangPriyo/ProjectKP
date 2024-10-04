<?php

use App\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desa::create([
            'nama_desa'         => 'Tawengan',
            'nama_kecamatan'    => 'Sambi',
            'nama_kabupaten'    => 'Boyolali',
            'alamat'            => 'Jl. Catur-Sambi km 2, Tawengan, Sambi, Boyolali 57376',
            'nama_kepala_desa'  => "Muslich Edy Wibowo, S.H",
            'alamat_kepala_desa' => "Dusun II, Tawengan, Sambi, Boyolali 57376",
            'logo'              => "logo.png",
        ]);
    }
}
