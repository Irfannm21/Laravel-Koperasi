<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimpananWajib extends Model
{
    protected $guarded = [];

    public function anggota() {
        return $this->belongsTo('App\SimpananWajib');
    }
}
