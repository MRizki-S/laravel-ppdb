<?php

use App\Http\Controllers\DataPpdbController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('landing-page.index');
});

Route::get('/dashboard', function () {
    // return view('admin.template.main_layout');
    return view('admin.main_dashboard');
});
Route::get('/registration-ppdb', function () {
    return view('landing-page.from-pendaftaran');
});

Route::get('/data-ppdb', [DataPpdbController::class, 'index']);
Route::get('/ppdb/{{id}}/detail', [DataPpdbController::class, 'show']);
