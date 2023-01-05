<?php

use Illuminate\Database\Seeder;
use App\PinjamanUsp;
use App\PinjamanEmergensi;
use App\Pembayaran;

class PembayaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usp = PinjamanUsp::all();

        // Jika Tenor - cicilan = 0 gagalkan perintah !
        foreach($usp as $i => $val) {

        }
        $usp->pembayarans()->createMany([
            [
                "tanggal" => '2023-01-01',
                "jumlah"  => 312000,
            ]
            ]);
    }
}
