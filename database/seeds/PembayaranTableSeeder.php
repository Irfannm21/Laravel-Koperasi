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
        $usp = PinjamanEmergensi::find(1);

        $usp->pembayarans()->createMany([
            [
                "tanggal" => '2022-03-01',
                "jumlah"  => 816000,
            ]
            ]);
    }
}
