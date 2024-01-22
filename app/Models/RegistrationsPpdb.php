<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationsPpdb extends Model
{
    use HasFactory;
    protected $table = 'registrations_ppdb';

    protected $fillable = [
        'nama_siswa',
        'nama_wali',
        'nik_siswa',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'phone_siswa',
        'phone_wali',
        'asal_sekolah',
        'jurusan_1',
        'jurusan_2',
        'status'];  
}
