<?php

namespace App\Http\Controllers;
use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index() {
        $results = Anggota::all();
        return view('koperasi.anggota.index', compact('results'));
    }

    public function create(){
        return view('koperasi.anggota.create');
    }

    public function store(Request $request) {
        $value = new Anggota;
        $value->kode = $request->kode;
        $value->nama = $request->nama;
        $value->departemen = $request->departemen;
        $value->bagian  = $request->bagian;
        $value->save();

        return view('koperasi.anggota.index');
    }

    public function edit($id) {
        $anggota = Anggota::find($id);
        return view('koperasi.anggota.edit', compact('anggota'));
    }
}
