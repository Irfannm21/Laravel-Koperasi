<?php

use Illuminate\Database\Seeder;
use App\PinjamanUsp;
use App\PinjamanEmergensi;
use App\Pembayaran;
use App\PinjamanKonsumsi;

class PembayaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $usp = PinjamanUsp::all();
        // // Jika Tenor - cicilan = 0 gagalkan perintah !
        // foreach($usp as $val) {
        //     $tenor = $val->tenor;
        //     $cicilan_masuk = $val->pembayarans->count();
        //     $sisa = ($tenor - $cicilan_masuk);
        //     if($sisa == 0) {
        //         continue;
        //     } else {
        //         $val->pembayarans()->createMany([
        //             [
        //                 "tanggal" => '2023-02-01',
        //                 "jumlah"  => 312000,
        //             ]
        //             ]);
        //     }
        // }

// hitung jumlah yang sudah dibayar

// lalu bayar

        $konsumsi = PinjamanKonsumsi::where('anggota_id',1)->get();
            $total_bayar = 1100;
            $kembalian = $total_bayar;
            foreach($konsumsi as $val) {
                     if($kembalian >= $val->jumlah) {
                        $kembalian = $kembalian - $val->jumlah;
                            $val->pembayarans()->createMany([
                               [
                                'tanggal' => '2022-11-11',
                                "jumlah" => $val->jumlah,
                               ]
                            ]);
                            continue;
                     } else {
                        $val->pembayarans()->createMany([
                            [
                             'tanggal' => '2022-11-11',
                             "jumlah" => $kembalian,
                            ]
                         ]);
                         return;
                     }
                }
    }
}
