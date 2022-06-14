@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

  <div class="container">
    <div class="row py-4 justify-content-center">
      <h1>Luas Persegi</h1>
    </div>
    <div class="row justify-content-center">
      <h4>phi x jari-jari x jari-jari</h4>
    </div>

    <form method="post" action="{{ route('perhitungan.luas.lingkaran') }}">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6 mx-auto">
          <label for="r">Masukkan jari jari</label>
          <input type="text" class="form-control" name="r" id="r">
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-primary mx-auto">Hitung</button>
      </div>
    </form>
  </div>
@endsection