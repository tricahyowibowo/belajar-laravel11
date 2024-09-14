<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->paginate(10);
 
    	// mengirim data pegawai ke view index
    	return view('pegawai/dataPegawai',['pegawai' => $pegawai]);
 
    }

    public function tambah(){
        return view('pegawai/tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'nama_pegawai' => $request->nama,
            'jabatan_pegawai' => $request->jabatan,
            'umur_pegawai' => $request->umur,
            'alamat_pegawai' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function edit($id){
    	$pegawai = DB::table('pegawai')->where('id_pegawai',$id)->get();

        return view('pegawai/edit', ['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('id_pegawai',$request->id)->update([
            'nama_pegawai' => $request->nama,
            'jabatan_pegawai' => $request->jabatan,
            'umur_pegawai' => $request->umur,
            'alamat_pegawai' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('id_pegawai',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
