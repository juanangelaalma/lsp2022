@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

    <div class="container py-4">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th scope="col">Nama</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Usia</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telp</th>
            <th scope="col">Tanggal ditambahkan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($siswa as $item)
            <td>1</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->sekolah }}</td>
            <td>{{ $item->usia }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->telp }}</td>
            <td>{{ $item->created_at }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#example').DataTable();
      });
    </script>
@endsection