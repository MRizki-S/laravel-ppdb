<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations_ppdb', function (Blueprint $table) {
            $table->id();

            $table->string('nama_siswa')->nullable();
            $table->string('nama_wali', 100)->nullable();
            $table->string('nik_siswa', 10)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 1)->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('phone_siswa', 100)->nullable();
            $table->string('phone_wali', 100);
            $table->string('asal_sekolah', 100);
            $table->string('status', 100)->default('pedding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations_ppdb');
    }
};
