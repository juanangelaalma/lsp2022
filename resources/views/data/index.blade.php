@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

    <div class="container py-4">
      <div class="row py-4">
        <div class="col-md-6 d-flex justify-content-center">
          <a href="{{ route('data.export.siswa') }}" class="btn btn-info">Export data siswa</a>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <a href="{{ route('data.export.perhitungan') }}" class="btn btn-warning">Export data perhitungan</a>
        </div>
      </div>
    </div>
@endsection