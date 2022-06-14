<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Untuk menampilkan file statistik dari data
     * total perhitungan dari luas dan volume yang sudah dilakukan
     * prosentase total perhitugan masing-masing bangun
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $total = Perhitungan::all()->count();
        $persegi = Perhitungan::where('kategori', 'persegi')->count();
        $lingkaran = Perhitungan::where('kategori', 'lingkaran')->count();
        $segitiga = Perhitungan::where('kategori', 'segitiga')->count();
        $kubus = Perhitungan::where('kategori', 'kubus')->count();
        $limas = Perhitungan::where('kategori', 'limas')->count();
        $tabung = Perhitungan::where('kategori', 'tabung')->count();

        $persegi = floor(($persegi / $total) * 100);
        $lingkaran = floor(($lingkaran / $total) * 100);
        $segitiga = floor(($segitiga / $total) * 100);
        $kubus = floor(($kubus / $total) * 100);
        $limas = floor(($limas / $total) * 100);
        $tabung = floor(($tabung / $total) * 100);

        $chart = [$persegi, $lingkaran, $segitiga, $kubus, $limas, $tabung];

        return view('dashboard', ['total' => $total])->with('chart', $chart);
    }
}
