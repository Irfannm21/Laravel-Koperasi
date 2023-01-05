<?php

use Illuminate\Database\Seeder;
use App\Anggota;
use App\PinjamanUsp;
class PinjamanUspTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = Anggota::find(2);

        $usp = new PinjamanUsp;
        $usp->tanggal = '2022-10-01';
        $usp->jumlah = 1000000;
        $usp->tenor = 3;
        $usp->cicilan = 312000;

        $anggota->pinjaman_usps()->save($usp);
    }
}
