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
        $anggota = Anggota::find(1);

        $usp = new PinjamanUsp;
        $usp->tanggal = '2022-12-01';
        $usp->jumlah = 10000000;
        $usp->tenor = 18;
        $usp->cicilan = 816000;

        $anggota->pinjaman_usps()->save($usp);
    }
}
