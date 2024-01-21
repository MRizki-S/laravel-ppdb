<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddDataPpdbController extends Controller
{
    public function store(){
        return view('admin.add-data-ppdb');
    }
}
