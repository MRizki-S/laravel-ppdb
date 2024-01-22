@extends('admin.template.main_layout')

@section('content')


    {{-- form pendaftaran --}}
    <div class="container " style="margin-bottom: 100px;">
        <div class="row">
            <div class="text-center mt-5 col-md-12">
                <h2>Formulir Pendaftaran Data Calon Peserta Didik</h2>
                <p class="text-center fw-semibold">Identitas</p>
            </div>

        <form action="/store" method="POST" class="col-md-12">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row ">
            <div class="col-md-8">
                <div class="form-group ">
                <label for="nama_siswa">Nama Lengkap</label>
                <input type="name" class="form-control" id="nama_siswa" name="nama_siswa"
                placeholder="Nama Lengkap" required/>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                <option selected>Choose...</option>
                <option>L</option>
                <option>P</option>
                </select>
            </div>
            </div>
            <div class="row mt-3 ">
            <div class="col-8">
                <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="name" class="form-control" id="" name="tempat_lahir" placeholder="Tempat Lahir" />
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="" name="tanggal_lahir"/>
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="name" class="form-control" id="asal_sekolah" name="asal_sekolah"
                            placeholder="Asal Sekolah" />
                </div>
            </div>
            <div class="col-md-4">
                <label for="agama">Agama</label>
                <select id="agama" name="agama" class="form-control">
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
                <label for="nik_siswa">Nomor Induk Siswa</label>
                <input type="number" class="form-control" id="nik_siswa" name="nik_siswa"
                placeholder="Nomor Induk Siswa" />
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="phone_siswa">No Telp Siswa</label>
                <input type="number" class="form-control" id="phone_siswa" name="phone_siswa"
                placeholder="No Telp Siswa" />
            </div>
            </div>
            <div class="row mt-3 ">
            <div class="col-8">
                <div class="form-group ">
                <label for="nama_wali">Nama Orang Tua</label>
                <input type="name" class="form-control" id="nama_wali" name="nama_wali"
                placeholder="Nama Orang Tua" />
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="phone_wali">No Telp Orang Tua</label>
                <input type="number" class="form-control" id="phone_wali" name="phone_wali"
                placeholder="No Telp Orang Tua" />
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-8">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
                    </div>
                </div>
                <div class="col-4">
                    {{-- jurusan 1 --}}
                    <label for="jurusan_1">Jurusan</label>
                    <select id="jurusan_1" name="jurusan_1" class="form-control">
                    <option selected>Choose...</option>
                    <option>RPL (Rekayasa Perangkat Lunak)</option>
                    <option>AKL (Akutansi)</option>
                    <option>MP (Manajemen Perkantoran)</option>
                    <option>TBSM (Teknik & Bisnis Sepeda Motor)</option>
                    <option>MM (Multimedia)</option>
                    <option>BDP (Bisnis & Pemasaran)</option>
                    </select>
                    {{-- jurusan 2 --}}
                    <label for="jurusan_2" class="mt-2">Jurusan Alternatif</label>
                    <select id="jurusan_2" name="jurusan_2" class="form-control">
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
