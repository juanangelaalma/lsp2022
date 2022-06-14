@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

  <div class="container justify-content-center">
    <h1 class="py-2 text-center">Hasilnya</h1>
    <div class="row py-4 justify-content-center">
      <h1>{{ $hasil }}</h1>
    </div>
  </div>
@endsection