<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $guarded = [];

    public function simpanan_wajibs(){
        return $this->hasMany('App\SimpananWajib');
    }

    public function pinjaman_usps(){
        return $this->hasMany('App\PinjamanUsp');
    }

    public function pinjaman_emergensis(){
        return $this->hasMany('App\PinjamanEmergensi');
    }

    public function pinjaman_konsumsis()
    {
        return $this->hasMany('App\PinjamanKonsumsi');
    }
}
