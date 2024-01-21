@extends('admin.template.main_layout')

@section('content')


    {{-- form pendaftaran --}}
    <div class="container " style="margin-bottom: 100px;">
        <div class="row">
            <div class="text-center mt-5 col-md-12">
                <h2>Formulir Pendaftaran Data Calon Peserta Didik
                </h2>
                {{-- <p class="fw-semibold" style="color: #4f46e5">
                Silahkan isi data diri anda & pilih alternatif paket keahlian.
                </p> --}}
                <p class="text-center fw-semibold">Identitas</p>
            </div>

        <form action="" method="POST" class="col-md-12">
            <div class="row ">
            <div class="col-md-8">
                <div class="form-group ">
                <label for="name_siswa">Nama Lengkap</label>
                <input type="name" class="form-control" id="name_siswa" name="name_siswa"
                placeholder="Nama Lengkap" required/>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                <option selected>Choose...</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
            </div>
            </div>
            <div class="row mt-3 ">
            <div class="col-8">
                <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="name" class="form-control" id="" name="" placeholder="Tempat Lahir" />
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="">Tanggal Lahir</label>
                <input type="date" class="form-control" id="" name=""/>
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="">Asal Sekolah</label>
                        <input type="name" class="form-control" id="" name=""
                placeholder="Asal Sekolah" />
                </div>
            </div>
            <div class="col-md-4">
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
            </div>
            <div class="row mt-3 ">
            <div class="col-8">
                <div class="form-group">
                <label for="">Nomor Induk Siswa</label>
                <input type="name" class="form-control" id="" name=""
                placeholder="Nomor Induk Siswa" />
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="">No Telp Siswa</label>
                <input type="number" class="form-control" id="" name=""
                placeholder="No Telp Siswa" />
            </div>
            </div>
            <div class="row mt-3 ">
            <div class="col-8">
                <div class="form-group ">
                <label for="">Nama Orang Tua</label>
                <input type="name" class="form-control" id="" name=""
                placeholder="Nama Orang Tua" />
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="">No Telp Orang Tua</label>
                <input type="number" class="form-control" id="" name=""
                placeholder="No Telp Orang Tua" />
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-8">
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" id="" name="" rows="4" required></textarea>
                    </div>
                </div>
                <div class="col-4">
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
            </div>
            <div class="row mt-5 mx-auto ml-5">
            <button type="submit"  class="btn btn-primary" style="width: 30%; margin-inline: auto">
                DAFTAR
            </button>
            </div>
        </form>
        </div>
    </div>

    {{-- end form --}}

@endsection
