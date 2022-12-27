<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Anggota;
class AnggotaTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
            for($i=0; $i<100; $i++) {
                $result_dep = $faker->randomElements(["Umum & Personalia","Engineering",]);
                if ($result_dep[0] == "Engineering") {
                    $result_bag = $faker->randomElements(["Administrasi","IT","Workshop","Listrik","Boiler","WWT"]);
                } else {
                    $result_bag = $faker->randomElements(["Pengupahan","Sopir","Absensi","Perijinan"]);
                }
                Anggota::create([
                    "kode" => $faker->numerify("KA####"),
                    "nama" => $faker->name,
                    "departemen" => $result_dep[0],
                    "bagian"    => $result_bag[0],
                    "simpanan_wajib" => $faker->randomNumber(7)
                ]);
            }
    }
}
