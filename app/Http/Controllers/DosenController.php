<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){

        $nama = "tri cahya wibawa";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        $data = array(
            'nama' => $nama,
            'asal' => 'Yogyakarta',
            'matkul' => $pelajaran
        );

        return view('biodata',$data);
    }
}
