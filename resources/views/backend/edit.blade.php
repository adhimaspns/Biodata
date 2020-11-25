<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Biodata</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  
  <!-- As a link -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Biodata</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('biodata') }}">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>

  {{-- Table --}}
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form action="{{ route('biodata.update', $biodata->id) }}" method="POST" style="margin-top: 100px;">
            @csrf
            @method('PATCH')
              <div class="form-group">
                <label> Nama </label>
                <input type="text" name="nama" class="form-control" value="{{ $biodata->nama }}">
              </div>
              <div class="form-group">
                <label> Alamat </label>
                <input type="text" name="alamat" class="form-control" value="{{ $biodata->alamat }}">
              </div>
              <div class="form-group">
                <label> Tanggal Lahir </label>
                <input type="text" name="ttl" class="form-control" value="{{ $biodata->ttl }}">
              </div>
              <div class="form-group">
                <label> Kelas </label>
                <input type="text" name="kelas" class="form-control" value="{{ $biodata->kelas }}">
              </div>
              <div class="form-group">
                <label> Sekolah </label>
                <input type="text" name="sekolah" class="form-control" value="{{ $biodata->sekolah }}">
              </div>
              <div class="form-group">
                <label> Jurusan </label>
                <input type="text" name="jurusan" class="form-control" value="{{ $biodata->jurusan }}">
              </div>
              <div class="form-group">
                <label> Email </label>
                <input type="email" name="email" class="form-control" value="{{ $biodata->email }}">
              </div>
              <div class="form-group">
                <label> Telepon </label>
                <input type="number" name="telp" class="form-control" value="{{ $biodata->telp }}">
              </div>

              <input type="submit" value="Simpan" class="btn btn-success">

          </form>
        </div>
      </div>
    </div>
  {{-- Akhir Table --}}

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</body>
</html>