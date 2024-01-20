<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- link css --}}
    <link rel="stylesheet" href="{{asset('style-lanpage/style.css')}}">

    {{-- cnd bootstrap & laeflet & font awesome --}}
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="  crossorigin="anonymous"  referrerpolicy="no-referrer"/>

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
              <a class="nav-link text-light" href="/home">Home</a>
              <a class="nav-link text-light" href="/home#jurusan">Jurusan</a>
              <a class="nav-link text-light" href="/home#alur-pendaftaran">Alur Pendaftaran</a>
            </div>
          </div>
        </div>
    </nav>
    {{-- navbar --}}


    {{-- form pendaftaran --}}
    <div class="container mt-5" style="margin-bottom: 100px;">
        <div class="row">
            <div class="text-center mt-5">
              <h3>Formulir Pendaftaran <br> Data Calon Peserta Didik
              </h3>
              <p class="fw-semibold" style="color: #4f46e5">
                Silahkan isi data diri anda & pilih alternatif paket keahlian.
              </p>
              <p class="text-center fw-semibold">Identitas</p>
            </div>

            <form action="" method="POST">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="name_siswa">Nama Lengkap</label>
                    <input type="name" class="form-control" id="name_siswa" name="name_siswa"
                    placeholder="Nama Lengkap" required/>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option selected>Choose...</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="name" class="form-control" id="" name="" placeholder="Tempat Lahir" />
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="" name=""/>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  <label for="">Agama</label>
                  <select id="" name="" class="form-control">
                    <option selected>Choose...</option>
                    <option>Islam</option>
                    <option>Kristen Protestan</option>
                    <option>Kristen Katolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Honghucu</option>
                  </select>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Asal Sekolah</label>
                    <input type="name" class="form-control" id="" name=""
                     placeholder="Asal Sekolah" />
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Nomor Induk Siswa</label>
                    <input type="name" class="form-control" id="" name=""
                     placeholder="Nomor Induk Siswa" />
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="">No Telp Siswa</label>
                  <input type="name" class="form-control" id="" name=""
                   placeholder="No Telp Siswa" />
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Nama Orang Tua</label>
                    <input type="name" class="form-control" id="" name=""
                     placeholder="Nama Orang Tua" />
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="">No Telp Orang Tua</label>
                  <input type="number" class="form-control" id="" name=""
                   placeholder="No Telp Orang Tua" />
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  {{-- jurusan 1 --}}
                  <label for="">Jurusan</label>
                  <select id="" class="form-control">
                    <option selected>Choose...</option>
                    <option>RPL (Rekayasa Perangkat Lunak)</option>
                    <option>AKL (Akutansi)</option>
                    <option>MP (Manajemen Perkantoran)</option>
                    <option>TBSM (Teknik & Bisnis Sepeda Motor)</option>
                    <option>MM (Multimedia)</option>
                    <option>BDP (Bisnis & Pemasaran)</option>
                  </select>
                  {{-- jurusan 2 --}}
                  <label for="" class="mt-2">Jurusan Alternatif</label>
                  <select id="" class="form-control">
                    <option selected>Choose...</option>
                    <option>RPL (Rekayasa Perangkat Lunak)</option>
                    <option>AKL (Akutansi)</option>
                    <option>MP (Manajemen Perkantoran)</option>
                    <option>TBSM (Teknik & Bisnis Sepeda Motor)</option>
                    <option>MM (Multimedia)</option>
                    <option>BDP (Bisnis & Pemasaran)</option>
                  </select>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" id="" name="" rows="4" required></textarea>
                  </div>
                </div>
              </div>
              <div class="row mt-5 mx-auto">
                <button type="submit"  class="btn btn-primary" style="width: 30%; margin-inline: auto">
                  DAFTAR
                </button>
              </div>
            </form>
        </div>
    </div>
    {{-- from pendaftaran --}}


      {{-- footer --}}
      <footer class="bg-primary">
        <div class="row p-5 mb-5 border-bottom border-white">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h1 class="text-white fw-bold">SMK JOMBANG</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
              repudiandae eaque fugit corrupti iste fuga.
            </p>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
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
                <a class="text-white text-decoration-none" href="#!" >Konfirmasi Pembayaran Awal</a>
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!">Admin</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h3 class="text-white">Bantuan</h3>
            <ul class="list-unstyled mt-3">
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!">John Doe (+62 888 888 999)</a>
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!">Wayne (+62 44 55 667)</a>
              </li>
              <li class="mb-3">
                <a class="text-white text-decoration-none" href="#!">https://esemkaprima.com</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <h3 class="text-white mb-3">Lokasi Kami</h3>
            <div id="map" style="height: 200px"></div>
          </div>
        </div>
        <div class="row p-5 mt-5">
          <div class="col-6 d-block">
            <h3>
              <a class="text-white" href=""><i class="fa-brands fa-facebook"></i></a>
            </h3>
            <h3>
              <a class="text-white" href=""><i class="fa-brands fa-twitter"></i></a>
            </h3>
          </div>
          <div class="col-6">
            <small class="text-white text-right">Copyright © 2024 SMK PEDULI JOMBANG</small>
          </div>
        </div>
      </footer>
      <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
      <script>
        var mymap = L.map("map").setView([-7.798359, 110.368674], 15); // Ganti dengan koordinat yang diinginkan

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
          attribution: "© OpenStreetMap contributors",
        }).addTo(mymap);

        var marker = L.marker([-7.798359, 110.368674]).addTo(mymap);
        marker.bindPopup("SMK JOMBANG").openPopup();
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
