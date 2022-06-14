<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    /**
     * untuk menuju ke menu pemilihan perhitungan
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perhitungan.list');
    }

    /**
     * Menuju ke form perhitungan luas lingkaran
     * @return \Illuminate\Http\Response
     */
    public function luas_lingkaran()
    {
        return view('perhitungan.lingkaran.index');
    }

    /**
     * Untuk mendapatkan hasil perhitungan luas lingkaran
     * Dan data dari hasil perhitungan disimpan di database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil_luas_lingkaran(Request $request)
    {
        $hasil = 3.14 * $request->r * $request->r;
        Perhitungan::create([
            'hasil' => $hasil,
            'kategori' => 'lingkaran'
        ]);
        return view('perhitungan.hasil', ['hasil' => $hasil]);
    }

    /**
     * Menuju ke form perhitungan luas persegi
     * @return \Illuminate\Http\Response
     */
    public function luas_persegi()
    {
        return view('perhitungan.persegi.index');
    }

    /**
     * Untuk mendapatkan hasil perhitungan luas persegi
     * Dan data dari hasil perhitungan disimpan di database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil_luas_persegi(Request $request)
    {
        $hasil = $request->sisi * $request->sisi;
        Perhitungan::create([
            'hasil' => $hasil,
            'kategori' => 'persegi'
        ]);
        return view('perhitungan.hasil', ['hasil' => $hasil]);
    }

    /**
     * Menuju ke form perhitungan luas segitiga
     * @return \Illuminate\Http\Response
     */
    public function luas_segitiga()
    {
        return view('perhitungan.segitiga.index');
    }

    /**
     * Untuk mendapatkan hasil perhitungan luas segitiga
     * Dan data dari hasil perhitungan disimpan di database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil_luas_segitiga(Request $request)
    {
        $hasil = 1/2 * $request->alas * $request->tinggi;
        Perhitungan::create([
            'hasil' => $hasil,
            'kategori' => 'segitiga'
        ]);
        return view('perhitungan.hasil', ['hasil' => $hasil]);
    }

    /**
     * Menuju ke form perhitungan volume kubus
     * @return \Illuminate\Http\Response
     */
    public function volume_kubus()
    {
        return view('perhitungan.kubus.index');
    }

    /**
     * Untuk mendapatkan hasil perhitungan volume kubus
     * Dan data dari hasil perhitungan disimpan di database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil_volume_kubus(Request $request)
    {
        $hasil = $request->sisi * $request->sisi * $request->sisi;
        Perhitungan::create([
            'hasil' => $hasil,
            'kategori' => 'kubus'
        ]);
        return view('perhitungan.hasil', ['hasil' => $hasil]);
    }

    /**
     * Menuju ke form perhitungan volume limas
     * @return \Illuminate\Http\Response
     */
    public function volume_limas()
    {
        return view('perhitungan.limas.index');
    }

    /**
     * Untuk mendapatkan hasil perhitungan volume limas
     * Dan data dari hasil perhitungan disimpan di database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil_volume_limas(Request $request)
    {
        $luas_alas = 1/2 * $request->alas * $request->tinggi_alas;
        $hasil = 1/3 * $request->tinggi * $luas_alas;
        
        Perhitungan::create([
            'hasil' => $hasil,
            'kategori' => 'limas'
        ]);
        return view('perhitungan.hasil', ['hasil' => $hasil]);   
    }

    /**
     * Menuju ke form perhitungan volume tabung
     * @return \Illuminate\Http\Response
     */
    public function volume_tabung()
    {
        return view('perhitungan.tabung.index');
    }

    /**
     * Untuk mendapatkan hasil perhitungan volume tabung
     * Dan data dari hasil perhitungan disimpan di database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil_volume_tabung(Request $request)
    {
        $hasil = 3.14 * $request->r * $request->r * $request->tinggi;
        
        Perhitungan::create([
            'hasil' => $hasil,
            'kategori' => 'tabung'
        ]);
        return view('perhitungan.hasil', ['hasil' => $hasil]);  
    }
}
