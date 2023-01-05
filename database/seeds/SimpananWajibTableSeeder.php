<?php

use Illuminate\Database\Seeder;
use App\SimpananWajib;
use App\Anggota;
class SimpananWajibTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = Anggota::find(3);

        $simpanan = new SimpananWajib;
        $simpanan->tanggal = "2023-12-01";
        $simpanan->jumlah_simpanan = "150000";

        $anggota->simpanan_wajibs()->save($simpanan);


    }
}
