<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index() {
        return view('data.index');
    }
    public function siswa() {
        $siswa = Siswa::all();

        if($siswa->count() > 0) {
            $delimiter = ","; 

            $filename = "data_siswa_" . date("Y-m-d") . ".csv";

            $f = fopen("php://memory", "w");

            $fields = array("NAMA", "SEKOLAH", "USIA", "ALAMAT", "TELEPHON");
            fputcsv($f, $fields);

            foreach($siswa as $row){
                $lineData = array($row['nama'], $row['sekolah'], $row['usia'], $row['alamat'], $row['telp']); 
                fputcsv($f, $lineData, $delimiter); 
            } 

            fseek($f, 0); 

            header('Content-Type: text/csv'); 
            header('Content-Disposition: attachment; filename="' . $filename . '";'); 

            //output all remaining data on a file pointer 
            fpassthru($f); 
        }
    }
    public function perhitungan() {
        $perhitungan = Perhitungan::all();

        if($perhitungan->count() > 0) {
            $delimiter = ","; 

            $filename = "data_perhitungan_" . date("Y-m-d") . ".csv";

            $f = fopen("php://memory", "w");

            $fields = array("HASIL", "KATEGORI");
            fputcsv($f, $fields);

            foreach($perhitungan as $row){
                $lineData = array($row['hasil'], $row['kategori']); 
                fputcsv($f, $lineData, $delimiter); 
            } 

            fseek($f, 0); 

            header('Content-Type: text/csv'); 
            header('Content-Disposition: attachment; filename="' . $filename . '";'); 

            //output all remaining data on a file pointer 
            fpassthru($f); 
        }
    }
}
