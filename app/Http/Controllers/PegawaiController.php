<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
    
    $pegawai = DB::table('pegawai')->get();
    
    return view('index',['pegawai' => $pegawai]);
    }

    public function tambah(){

        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->nama,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }
    

}
