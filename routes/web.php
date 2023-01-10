<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use App\Anggota;
use App\SimpananWajib;
use App\PinjamanUsp;
use App\Pembayaran;
use App\PinjamanKonsumsi;


Route::get('/', function() {
    return view('welcome');
});

Route::resource('/anggota-koperasi', 'AnggotaController');


Route::get('/pembayaran', function() {
    // $results = PinjamanUsp::has('pembayarans')->get();
    // // dd($results);
    // echo "<h2>Daftar Peminjam USP</h2><hr>";
    // foreach($results as $item){
    //     $tenor = $item->tenor;
    //     $cicilan_masuk = $item->pembayarans->count();
    //     $sisa = ($tenor - $cicilan_masuk);

    //     if($tenor - $cicilan_masuk == 0) {
    //         continue;
    //     } else {
    //         echo "Nama = " . $item->anggota->nama;
    //     echo "<br> Tenor Usp = " . $item->tenor;
    //     echo "<br> Cicilan Masuk = " .$item->pembayarans->count();
    //     }
    //     echo "<hr>";

    $konsumsi = PinjamanKonsumsi::where('anggota_id',1)->get();
    $total_bayar = 900;
    $kembalian = $total_bayar;
    foreach($konsumsi as $val) {
             if($kembalian >= $val->jumlah) {
                $bayar = $val->jumlah - $kembalian;
                   echo "Kembalian lebih besar <br>";
                   continue;
             } else {
                $bayar = $val->jumlah - $kembalian;
                $kembalian = 0;
                echo "kembalian lebih kecil";
             }
        }

});

Route::get('/all', function () {
    $daftar_anggota = Anggota::limit(10)->get();
    echo "Daftar Anggota Koperasi <hr>";
    echo "<table>";
    echo "<thead>";
    echo "<th>Kode Anggota</th>";
    echo "<th>Nama</th>";
    echo "<th>Departemen</th>";
    echo "<th>Bagian</th>";
    echo "<th>Total Simpanan</th>";
    echo "</thead>";
        echo "<tbody>";
        foreach($daftar_anggota as $value) {
            echo "<tr>";
            echo  "<td>". $value->kode . "</td>";
            echo  "<td>". $value->nama . "</td>";
            echo  "<td>". $value->departemen . "</td>";
            echo  "<td>". $value->bagian . "</td>";
            echo  "<td>". $value->simpanan_wajibs->sum('jumlah_simpanan') . "</td>";
            echo "</tr>";
        }
    echo "</tbody>";
    echo "</table><hr>";

    $results = SimpananWajib::has('anggota')->get();
    echo "<table>";
    echo "<thead>";
    echo "<th>Nama</th>";
    echo "<th>Tanggal</th>";
    echo "<th>Nominal</th>";
    echo "</thead>";
    echo "<tbody>";
    foreach($results as $item) {
        echo "<tr>";
        echo "<td>" .  $item->anggota->nama . "</td>";
        echo "<td>" .  $item->tanggal . "</td>";
        echo "<td>" .  $item->jumlah_simpanan . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
});

Route::get('/simpanan', function () {
    $results = SimpananWajib::has('anggota')->get();
    echo "<table>";
    echo "<thead>";
    echo "<th>Nama</th>";
    echo "<th>Tanggal</th>";
    echo "<th>Nominal</th>";
    echo "</thead>";
    echo "<tbody>";
    foreach($results as $item) {
        echo "<tr>";
        echo "<td>" .  $item->anggota->nama . "</td>";
        echo "<td>" .  $item->tanggal . "</td>";
        echo "<td>" .  $item->jumlah_simpanan . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
});

Route::get('/anggota', function () {
    $faker = Faker::create('id_ID');

    $daftar_anggota = Anggota::limit(10)->get();
    echo "Daftar Anggota Koperasi <hr>";
    echo "<hr>";
    echo "<table>";
    echo "<thead>";
    echo "<th>Kode Anggota</th>";
    echo "<th>Nama</th>";
    echo "<th>Departemen</th>";
    echo "<th>Bagian</th>";
    echo "<th>Total Simpanan</th>";
    echo "<th>Sisa Cicilan USP</th>";
    echo "<th>Cicilan Masuk</th>";
    echo "</thead>";
        echo "<tbody>";
        foreach($daftar_anggota as $value) {
            echo "<tr>";
            echo  "<td>". $value->kode . "</td>";
            echo  "<td>". $value->nama . "</td>";
            echo  "<td>". $value->departemen . "</td>";
            echo  "<td>". $value->bagian . "</td>";
            echo  "<td>". $value->simpanan_wajibs->sum('jumlah_simpanan') . "</td>";
            foreach($value->pinjaman_usps as $item) {
               echo "<td>" . $item->tenor . "</td>";
            }
            foreach($value->pembayarans as $item) {
                echo "<td>" . $item->id . "</td>";
             }


            echo "</tr>";
        }
    echo "</tbody>";
    echo "</table>";
});

