<?php

use App\Dusun;
use Illuminate\Database\Seeder;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dusun::create([
            'id'    => 1,
            'nama'  => 'Dusun I'
        ]);
        Dusun::create([
            'id'    => 2,
            'nama'  => 'Dusun II'
        ]);
        Dusun::create([
            'id'    => 3,
            'nama'  => 'Dusun III'
        ]);
    }
}
