@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

  <div class="container wrapper d-flex justify-content-center align-items-center">
    <form method="post" action="{{ route('siswa.store') }}">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group col-md-6">
          <label for="sekolah">Sekolah</label>
          <input type="text" name="sekolah" class="form-control" id="sekolah">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="usia">Usia</label>
          <input type="number" name="usia" class="form-control" id="usia" placeholder="12">
        </div>
        <div class="form-group col-md-6">
          <label for="telp">No telp</label>
          <input type="text" name="telp" class="form-control" id="no_telp">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-8 align-self-end">
          <label for="usia">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="usia" >
        </div>
        <div class="col-m-4 align-self-end">
          <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </div>
      </div>
    </form>
  </div>
@endsection