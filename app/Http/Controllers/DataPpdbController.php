<?php

namespace App\Http\Controllers;

use App\Models\RegistrationsPpdb;
use Illuminate\Http\Request;

class DataPpdbController extends Controller
{
    public function index() {
        $dataPpdb = RegistrationsPpdb::all();
        return view('admin.data-ppdb', [
            'dataPPDB' => $dataPpdb,
        ]);
    }

    // method untuk detail data ppdb
    public function show($id) {
        $showDataPPDB = RegistrationsPpdb::findOrFail($id);
    }
}
