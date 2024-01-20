@extends('admin.template.main_layout')

@section('content')


    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data PPDB</h1>
        </div>


        {{-- tables data-ppdb --}}
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Calon Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPPDB as $item)
                                <tr>
                                    <td>1</td>
                                    <td>{{$item->nama_siswa}}</td>
                                    <td>{{$item->nik_siswa}}</td>
                                    <td>{{$item->tempat_lahir}}</td>
                                    <td>{{$item->tanggal_lahir}}</td>
                                    <td class="text-center">{{$item->jenis_kelamin}}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-warning btn-sm">{{$item->status}}</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-primary mb-1">Detail</a>
                                        <a href="" class="btn btn-sm btn-danger mb-1">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>098765432</td>
                                <td>Jember</td>
                                <td>2007-01-01</td>
                                <td class="text-center">L</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-warning btn-sm">Pedding</a>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-primary mb-1">Detail</a>
                                    <a href="" class="btn btn-sm btn-danger mb-1">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

        {{-- <td class="text-center">
            <a href="" class="btn btn-sm btn-success">Terima</a>
            <a href="" class="btn btn-sm btn-danger">Tolak</a>
        </td> --}}
@endsection
