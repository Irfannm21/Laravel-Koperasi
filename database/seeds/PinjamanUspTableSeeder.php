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
        $usp->tanggal = '2023-01-01';
        $usp->jumlah = 2000000;
        $usp->tenor = 2;
        $usp->cicilan = 1120000;

        $anggota->pinjaman_usps()->save($usp);
    }
}
