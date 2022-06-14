@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

  <div class="container">
    <div class="row py-4">
      <div class="col-sm  text-center">
        <a href="{{ route('perhitungan.luas.persegi') }}" class="btn btn-danger">Luas Persegi</a>
      </div>
      <div class="col-sm  text-center">
        <a href="{{ route('perhitungan.luas.segitiga') }}" class="btn btn-info">Luas Segitiga</a>
      </div>
      <div class="col-sm  text-center">
        <a href="{{ route('perhitungan.luas.lingkaran') }}" class="btn btn-warning">Luas Lingkaran</a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm text-center">
        <a href="{{ route('perhitungan.volume.kubus') }}" class="btn btn-dark">Volume Kubus</a>
      </div>
      <div class="col-sm  text-center">
        <a href="{{ route('perhitungan.volume.limas') }}" class="btn btn-primary">Volume Limas</a>
      </div>
      <div class="col-sm  text-center">
        <a href="{{ route('perhitungan.volume.tabung') }}" class="btn btn-info">Volume Tabung</a>
      </div>
    </div>
  </div>
@endsection