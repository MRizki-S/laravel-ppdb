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
        Schema::table('registrations_ppdb', function (Blueprint $table) {
                        // RELASI BELONGSTO (MANY TO ONE)
            // relasi ke column jurusan_1 ke table majors
            $table->unsignedBigInteger('jurusan_1')->after('asal_sekolah');
            $table->foreign('jurusan_1')->references('id')->on('majors');

            // relasi ke column jurusan_2 ke table majors
            $table->unsignedBigInteger('jurusan_2')->after('jurusan_1');
            $table->foreign('jurusan_2')->references('id')->on('majors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations_ppdb', function (Blueprint $table) {
            $table->dropForeign(['jurusan_1']);
            $table->dropForeign(['jurusan_2']);
            $table->dropColumn('jurusan_1');
            $table->dropColumn('jurusan_2');
        });
    }
};
