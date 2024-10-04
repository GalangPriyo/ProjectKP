<?php

use App\DetailJenisAnggaran;
use Illuminate\Database\Seeder;

class DetailJenisAnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailJenisAnggaran::create([
            'id'                        => 111,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 11,
            'nama'                      => 'Hasil Usaha Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 112,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 11,
            'nama'                      => 'Hasil Aset Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 113,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 11,
            'nama'                      => 'Swadaya, Partisipasi dan Gotong Royong'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 114,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 11,
            'nama'                      => 'Lain-Lain Pendapatan Asli Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 121,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 12,
            'nama'                      => 'Dana Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 122,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 12,
            'nama'                      => 'Bagi Hasil Pajak dan Retribusi'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 123,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 12,
            'nama'                      => 'Alokasi Dana Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 124,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 12,
            'nama'                      => 'Bantuan Keuangan Provinsi'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 125,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 12,
            'nama'                      => 'Bantuan Keuangan Kabupaten/Kota'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 131,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Penerimaan dari Hasil Kerjasama Antar Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 132,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 133,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 134,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Hibah dan Sumbangan dari Pihak Ketiga'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 135,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Koreksi Kesalahan Belanja Tahun-tahun Sebelumnya'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 136,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Bunga Bank'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 139,
            'jenis_anggaran_id'         => 1,
            'kelompok_jenis_anggaran_id' => 13,
            'nama'                      => 'Lain-lain Pendapatan Desa Yang Sah'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 211,
            'jenis_anggaran_id'         => 2,
            'kelompok_jenis_anggaran_id' => 21,
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 221,
            'jenis_anggaran_id'         => 2,
            'kelompok_jenis_anggaran_id' => 22,
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 231,
            'jenis_anggaran_id'         => 2,
            'kelompok_jenis_anggaran_id' => 23,
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 241,
            'jenis_anggaran_id'         => 2,
            'kelompok_jenis_anggaran_id' => 24,
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 251,
            'jenis_anggaran_id'         => 2,
            'kelompok_jenis_anggaran_id' => 25,
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 311,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 31,
            'nama'                      => 'SILPA Tahun Sebelumnya'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 312,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 31,
            'nama'                      => 'Pencairan Dana Cadangan'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 313,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 31,
            'nama'                      => 'Hasil Penjualan Kekayaan Desa Yang Dipisahkan'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 319,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 31,
            'nama'                      => 'Penerimaan Pembiayaan Lainnya'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 321,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 32,
            'nama'                      => 'Pembentukan Dana Cadangan'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 322,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 32,
            'nama'                      => 'Penyertaan Modal Desa'
        ]);

        DetailJenisAnggaran::create([
            'id'                        => 329,
            'jenis_anggaran_id'         => 3,
            'kelompok_jenis_anggaran_id' => 32,
            'nama'                      => 'Pengeluaran Pembiayaan Lainnya'
        ]);
    }
}
