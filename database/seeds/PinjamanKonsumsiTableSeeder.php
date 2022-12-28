<?php

use Illuminate\Database\Seeder;
use App\Anggota;
use App\PinjamanKonsumsi;

class PinjamanKonsumsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = Anggota::find(1);

        $ko = new PinjamanKonsumsi;
        $ko->tanggal = '2022-01-10';
        $ko->jumlah = 243000;

        $anggota->pinjaman_konsumsis()->save($ko);
    }
}
