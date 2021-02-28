<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
	public function index()
    {
    	// ambil data dari tabel siswa
    	$pegawai = \DB::table('pegawai')->get();

    	// kirim data siswa ke view index
    	return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
    	return view('tambah');
    }

    public function store(Request $request)
    {
    	// insert data ke tabel pegawai
    	\DB::table('pegawai')->insert([
    		'pegawai_nama' => $request->nama,
    		'pegawai_jabatan' => $request->jabatan,
    		'pegawai_umur' => $request->umur,
    		'pegawai_alamat' => $request->alamat
    	]);

    	// arahkan kembali ke halaman pegawai
    	return redirect('/pegawai');
    }

    public function edit($id)
    {
    	// mengambil data sesuai id
    	$pegawai = \DB::table('pegawai')->where('pegawai_id', $id)->get();

    	// passing data pegawai yang didapat ke view edit.blade.php
    	return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
    	// update data pegawai
    	\DB::table('pegawai')->where('pegawai_id', $request->id)->update([
    		'pegawai_nama' => $request->nama,
    		'pegawai_jabatan' => $request->jabatan,
    		'pegawai_umur' => $request->umur,
    		'pegawai_alamat' => $request->alamat
    	]);

    	// arahkan kembali ke halaman pegawai
    	return redirect('/pegawai');
    }

    public function hapus($id)
    {
    	// hapus data sesuai id
    	\DB::table('pegawai')->where('pegawai_id', $id)->delete();

    	//arahkan kembali ke halaman pegawai
    	return redirect('/pegawai');

    }
}
