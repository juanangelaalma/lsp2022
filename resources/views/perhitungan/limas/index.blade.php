@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

  <div class="container">
    <div class="row py-4 justify-content-center">
      <h1>Volume Limas</h1>
    </div>
    <div class="row justify-content-center">
      <h4>luas alas x tinggi</h4>
    </div>

    <form method="post" action="{{ route('perhitungan.volume.limas') }}">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6 mx-auto">
          <label for="tinggi">Masukkan tinggi</label>
          <input type="text" class="form-control" name="tinggi" id="tinggi">
        </div>
      </div>
      <div class="row justify-content-center">
        <h4>luas alas = 1/2 * alas * tinggi</h4>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6 mx-auto">
          <label for="alas">Masukkan alas</label>
          <input type="text" class="form-control" name="alas" id="alas">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6 mx-auto">
          <label for="tinggi_alas">Masukkan tinggi alas</label>
          <input type="text" class="form-control" name="tinggi_alas" id="tinggi_alas">
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-primary mx-auto">Hitung</button>
      </div>
    </form>
  </div>
@endsection