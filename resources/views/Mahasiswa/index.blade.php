<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Ini Halaman Mahasiswa</h2>
    <a href="{{ route('mahasiswa.pendaftaran') }}">Pendaftaran Mahasiswa</a>
    <br>
    <a href="{{ route('mahasiswa.ujian') }}">Ujian Mahasiswa</a>
    <br>
    <a href="{{ route('mahasiswa.nilai') }}">Nilai Mahasiswa</a>

</body>

</html>

{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('mahasiswa/pendaftaran') }}"  class="nav-link">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('mahasiswa/ujian') }}"  class="nav-link">Ujian</a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('mahasiswa/nilai') }}"  class="nav-link">Nilai</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
      </nav>
      <h1 class="text-center mt-5">{{ $text }}</h1>
      <div class="container">
          <hr>
      </div>
      <br>

      <h2>b</h2>
      <a href ="{{ route ('mahasiswa.pendaftaran') }}">Pendaftaran Mahasiswa</a>
      <br>
      <a href ="{{ route ('mahasiswa.ujian') }}">Ujian Mahasiswa</a>
      <br>
      <a href ="{{ route ('mahasiswa.nilai') }}">Nilai Mahasiswa</a>

      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-dark" type="button">
            <a href="{{ URL::to('mahasiswa/pendaftaran') }}" type="button" class="btn btn-dark">Pendaftaran</a>
        </button>
        <button class="btn btn-primary" type="button">
            <a href="{{ URL::to('mahasiswa/ujian') }}" type="button" class="btn btn-danger">Ujian</a>
        </button>
        <button class="btn btn-primary" type="button">
            <a href="{{ URL::to('mahasiswa/nilai') }}" type="button" class="btn btn-warning">Nilai</a>
        </button>
      </div>

      <
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html> --}}
