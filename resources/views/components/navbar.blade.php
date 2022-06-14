<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Aplikasi SD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item mx-4 active">
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="{{ route('perhitungan.list') }}">Perhitungan <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="{{ route('siswa.table') }}">Data <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="{{ route('siswa.create') }}">Isi biodata <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="{{ route('data.export') }}">Export Data <span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </div>
    </div>    
</nav>