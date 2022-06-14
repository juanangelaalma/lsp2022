@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

  <div class="container">
    <div class="row py-4 justify-content-center">
      <h1>Volume Kubus</h1>
    </div>
    <div class="row justify-content-center">
      <h4>sisi x sisi x sisi</h4>
    </div>

    <form method="post" action="{{ route('perhitungan.volume.kubus') }}">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6 mx-auto">
          <label for="sisi">Masukkan sisi</label>
          <input type="text" class="form-control" name="sisi" id="sisi">
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-primary mx-auto">Hitung</button>
      </div>
    </form>
  </div>
@endsection