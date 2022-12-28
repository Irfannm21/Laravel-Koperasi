<?php

use Illuminate\Database\Seeder;
use App\PinjamanEmergensi;
use App\Anggota;
class PinjamanEmergensiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = Anggota::find(1);

        $eme = new PinjamanEmergensi;
        $eme->tanggal = '2022-01-01';
        $eme->jumlah = 5000000;
        $eme->tenor = 18;
        $eme->cicilan = 480000;

        $anggota->pinjaman_emergensis()->save($eme);
    }
}
