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
        $validated = $request->validate([
            'nama' => 'required|max:20',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);
        DB::table('pegawai')->insert([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }
    public function edit($id){
        //mengambil data pegawai yang dipilih  melalui id 
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        //passing data yang di ambil dari view.edit
        return view('edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'nama' => 'required|max:20',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }

    public function hapus($id){
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/pegawai');
    }    
    
}
