<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationsPpdb;
use Illuminate\Support\Facades\Session;

class AddDataPpdbController extends Controller
{

    public function create()
    {
        $class = RegistrationsPpdb::all();
        // dd($class);
        return view('adddatappdb.add-data-ppdb');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama_siswa' => 'required|max:255',
            'nama_wali' => 'required|max:100',
            'nik_siswa' => 'required|max:10',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            // 'jenis_kelamin' => 'required|in:L,P',
            // 'agama' => 'required|max:100',
            'alamat' => 'required|max:100',
            'phone_siswa' => 'required|max:15',
            'phone_wali' => 'required|max:15',
            'asal_sekolah' => 'required|max:100',
            // 'jurusan_1' => 'required|max:255',
            // 'jurusan_2' => 'required|max:255',
            // 'status' => 'required|max:100',
        ]);

        $ppdb = RegistrationsPpdb::create($request->all());

        if($ppdb){
            Session::flash('massage','data berhasil ditambahkan');
            Session::flash('status','success');

            return redirect('adddatappdb.add-data-ppdb');

        } else {
            Session::flash('massage','data gagal ditambahkan');
            Session::flash('status','danger');

            return redirect('adddatappdb.add-data-ppdb');

        }


    }
}
