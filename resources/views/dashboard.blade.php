@extends('layouts.app')

@section('content')
  <x-navbar active="isi_biodata"></x-navbar>

    <div class="container py-4">
      <div class="row">
        <div class="col-md-6">
          <div id="chart"></div>
        </div>
        <div class="col-md-6">
          <h6>Total perhitungan yang telah dilakukan</h6>
          <h1>{{ $total }}</h1>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var data = {{ json_encode($chart) }}
    var options = {
          series: data,
          chart: {
          width: 380,
          type: 'pie',
        },
        labels: ['Persegi', 'Segitiga', 'Lingkaran', 'Kubus', 'Limas', 'Tabung'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
@endsection