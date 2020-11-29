<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Tentang Saya</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{ $biodata->nama }}
                    </h1>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Tentang Saya</h2>
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td>
                            <strong class="lead">
                              Nama Lengkap
                            </strong>
                          </td>
                          <td> : {{ $biodata->nama }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              Alamat
                            </strong>
                          </td>
                          <td> : {{ $biodata->alamat }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              Tanggal Lahir
                            </strong>
                          </td>
                          <td> : {{ date('d F Y', strtotime($biodata->ttl)) }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              Kelas
                            </strong>
                          </td>
                          <td> : {{ $biodata->kelas }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              Sekolah
                            </strong>
                          </td>
                          <td> : {{ $biodata->sekolah }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              Jurusan
                            </strong>
                          </td>
                          <td> : {{ $biodata->jurusan }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              E-mail
                            </strong>
                          </td>
                          <td> : {{ $biodata->email }}</td>
                        </tr>
                        <tr>
                          <td>
                            <strong class="lead">
                              Telepon
                            </strong>
                          </td>
                          <td> : {{ $biodata->telp }}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>