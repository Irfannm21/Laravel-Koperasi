<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    $faker = Faker::create('id_ID');

    $arr = [];
    for($i=0; $i<=10; $i++){
        $arr = [
            "kode" => $faker->numerify("KA####"),
            "nama" => $faker->name,
            "simpanan_wajib" => $faker->randomNumber(7),
        ];
    }

    print_r($arr);
});

