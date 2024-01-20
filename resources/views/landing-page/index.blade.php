<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link icon font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- untuk map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    {{-- link css external --}}
    <link rel="stylesheet" href="{{asset('style-lanpage/style.css')}}">

</head>
<body>

    {{-- navbar --}}
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container">
          <a class="navbar-brand fw-bold fs-3" href="#">SMK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link text-light" href="#">Home</a>
              <a class="nav-link text-light" href="#jurusan">Jurusan</a>
              <a class="nav-link text-light" href="#alur-pendaftaran">Alur Pendaftaran</a>
            </div>
            <a class="btn btn-outline-light fs-6" href="/registration-ppdb">Daftar PPDB</a>
          </div>
        </div>
    </nav>

    <!-- home section -->
    <div class="home-section container-fluid d-flex align-items-md-center justify-content-center vh-100 " >
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 col-md-8 col-sm-10 mt-md-5 m-auto">
                    <h1 class="fw-bold title-home">PPDB ONLINE <br> SMK PEDULI JOMBANG</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, porro. <br>
                        Untuk calon pendaftar tahun ajaran 2024/2025 bisa
                        mendaftar melalui website ini atau langsung datang
                        ke tempat pendaftaran</p>
                    <a href="/registration-ppdb" class="btn-daftar btn btn-outline-primary rounded   shadow">Daftar Sekarang</a>
                </div>
                <div class="col-lg-6 col-md-8  img-content">
                    <img src="{{asset('images/home-img-ppdb.png')}}" class="img-fluid" width="450px" alt="image" draggable="false">
                </div>
            </div>
        </div>
    </div>
    <!-- akhir home section -->

    <!-- kosentrasi keahlian -->
    <div class="container-fluid container-jurusan">
    <div class="container " id="jurusan">
        <div class="col">
            <p style="font-size: 40px; font-weight: 700;" class="text-center title-jurusan">Kosentrasi Keahlian</p>
            <div class="row m-5 " style="justify-content: center; ">
                <div class="card card-tbsm" style="width: 20rem; height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold text-dark">TBSM</p>
                        <p class="card-text text-center">TEKNIK BISNIS SEPEDA MOTOR
                        </p>
                    </div>
                </div>
                <div class="card card-pplg" style="width: 20rem; height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold text-warning">PPLG</p>
                        <p class="card-text text-center">REKAYASA PERANGKAT LUNAK</p>
                    </div>
                </div>
                <div class="card card-dkv" style="width: 20rem;height: 150px;">
                    <div class="card-body ">
                        <p class="text-awal fw-bold text-primary" style="text-align: center;">DKV</p>
                        <p class="card-text" style="text-align: center;">Desain komunikasi visual
                        </p>
                    </div>
                </div>
                <div class="card card-otkp" style="width: 20em;height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold text-info">OTKP</p>
                        <p class="card-text text-center">TEKNIK PERKANTORAN</p>
                    </div>
                </div>
                <div class="card card-akl" style="width: 20rem;height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold text-success" style="text-align: center;"> AKUTANSI</p>
                        <p class="card-text" style="text-align: center;">KEUANGAN AKUNTANSI
                        </p>
                    </div>
                </div>
                <div class="card card-bdp" style="width: 20rem;height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold text-danger" style="text-align: center;"> BDP</p>
                        <p class="card-text" style="text-align: center;">BISNIS DARING PEMASARAN
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- akhir kosentrasi keahlian -->


    <!-- Alur Pendaftaran -->
    <div class="content" id="alur-pendaftaran">
        <h1 class="mt-2 fw-bold" style="text-align: center;font-size: 40px;">Alur Pendaftaran
        </h1>
        <p class="mt-2 " style="text-align: center; ">Terdapat beberapa langkah pendaftaran yang harus dipenuhi agar <br>
            rangkaian pendaftaran hingga seleksi berjalan dengan lancar.</p>

        <div class="mt-5 container-alur" style="display: flex; justify-content: center; ">
            <div class="row col-7 ml-5">
                <div class="card card-alur" style="width: 10rem; height: 150px;">
                    <div class="card-body ">
                        <p class="text-awal fw-bold">1</p>
                        <p class="card-text text-center">
                            Daftar Akun SMK</p>
                    </div>
                </div>
                <div class="card card-alur" style="width: 10rem; height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold">2</p>
                        <p class="card-text text-center">
                        Isi Formulir Data Diri</p>
                    </div>
                </div>

                <div class="card card-alur" style="width: 10rem; height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold">3</p>
                        <p class="card-text text-center">Pemeriksaan Data</p>
                    </div>
                </div>

                <div class="card card-alur" style="width: 10rem; height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold">4</p>
                        <p class="card-text text-center">
                        Pengumuman Hasil Melalui Email</p>
                    </div>
                </div>

                <div class="card card-alur m-lg-auto" style="width: 10rem; height: 150px;">
                    <div class="card-body">
                        <p class="text-awal fw-bold">5</p>
                        <p class="card-text text-center">
                            Daftar Ulang Di Sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir Alur Pendaftaran -->


    <!-- footer -->
    <footer class="bg-primary">
        <div class="row p-5 mb-5 border-bottom border-white">
          <div class="col-lg col-md-6 mb-4 mb-md-0">
            <h1 class="text-white fw-bold">SMK JOMBANG</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
              repudiandae eaque fugit corrupti iste fuga.
            </p>
          </div>
          <div class="col-lg col-md-6 mb-4 mb-md-0">
            <h3 class="text-white">Tautan Lain</h3>
            <ul class="list-unstyled mt-3">
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!">Beranda</a>
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!"
                  >Pendaftaran</a
                >
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!"
                  >Konfirmasi Pembayaran Awal</a
                >
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!">Admin</a>
              </li>
            </ul>
          </div>
          <div class="col-lg col-md-6 mb-4 mb-md-0">
            <h3 class="text-white">Bantuan</h3>
            <ul class="list-unstyled mt-3">
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!"
                  >John Doe (+62 888 888 999)</a
                >
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!"
                  >Wayne (+62 44 55 667)</a
                >
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!"
                  >https://esemkaprima.com</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg col-md-6 mb-5 mb-md-0">
            <h3 class="text-white mb-3">Lokasi Kami</h3>
            <div id="map" style="height: 200px"></div>
          </div>
        </div>
        <p class="text-center text-light">Copyright © 2024 SMK PEDULI JOMBANG</p>
      </footer>

      <!-- untuk mapping -->
      <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
      <script>
        var mymap = L.map("map").setView([-7.798359, 110.368674], 15); // Ganti dengan koordinat yang diinginkan

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
          attribution: "© OpenStreetMap contributors",
        }).addTo(mymap);

        var marker = L.marker([-7.798359, 110.368674]).addTo(mymap);
        marker.bindPopup("SMK JOMBANG").openPopup();
      </script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>


    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
