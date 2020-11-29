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
          <a class="nav-link" href="#">Tambah Biodata</a>
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
        <div class="col-lg-12">
          <a href="{{ url('biodata/create') }}" class="btn btn-primary" style="margin-top: 150px">
            Tambah
          </a>
          <table class="table table-striped">
            
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Kelas</th>
                <th scope="col">Sekolah</th>
                <th scope="col">Jurusan</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telepon</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($biodata as $bio)
                <tr>
                  <td>{{ $bio->id}}</td>
                  <td>{{ $bio->nama}}</td>
                  <td>{{ $bio->alamat}}</td>
                  <td>{{ $bio->ttl}}</td>
                  <td>{{ $bio->kelas}}</td>
                  <td>{{ $bio->sekolah}}</td>
                  <td>{{ $bio->jurusan}}</td>
                  <td>{{ $bio->email}}</td>
                  <td>{{ $bio->telp}}</td>
                  <td>
                    <a href="{{ route('biodata.edit', $bio->id) }}" class="btn btn-warning">
                      Edit
                    </a>
                    <form action="{{ route('biodata.destroy', $bio->id) }}" method="post" class="d-inline">
                      <button type="submit" class="btn btn-danger">
                        @csrf
                        @method('DELETE')
                        Hapus
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  {{-- Akhir Table --}}

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</body>
</html>