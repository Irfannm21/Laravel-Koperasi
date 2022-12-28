<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use App\Anggota;
use App\SimpananWajib;

Route::get('/', function () {

    echo "Daftar Anggota Koperasi <hr>";
    $daftar_anggota = Anggota::limit(10)->get();
    $simpanan = SimpananWajib::has('anggota');

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
            foreach($value->simpanan_wajibs as $item) {
                echo "<td>" . date('m-Y', strtotime($item->tanggal)) . "</td>";
            }
            echo  "<td>". $value->simpanan_wajibs->sum('jumlah_simpanan') . "</td>";
            echo "</tr>";
        }
    echo "</tbody>";
    echo "</table>";
    $faker = Faker::create('id_ID');
});

