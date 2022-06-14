<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Menampilkan tabel yang berisi biodata siswa
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.table', [
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Untuk masuk ke pengisian biodata
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Untuk menambahkan data yang telah diisi ke dalam database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'sekolah' => 'required',
            'usia'  => 'required',
            'alamat' => 'required',
            'telp' => 'required'
        ]);

        Siswa::create([
            'nama'  => $request->nama,
            'sekolah' => $request->sekolah,
            'alamat' => $request->alamat,
            'usia' => $request->usia,
            'telp' => $request->telp,
        ]);
        
        return redirect()->route('perhitungan.list');
    }
}
