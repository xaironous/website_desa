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
        Schema::create('penggunaan_lahan', function (Blueprint $table) {
            $table->text('nama')->unique();
            $table->text('jumlah');
        });

        Schema::create('fasilitas_pendidikan', function (Blueprint $table) {
            $table->text('nama')->unique();
            $table->text('jumlah');
        });

        Schema::create('fasilitas_kesehatan', function (Blueprint $table) {
            $table->text('nama')->unique();
            $table->text('jumlah');
        });

        Schema::create('jenis_kelamin', function (Blueprint $table) {
            $table->text('jenis')->unique();
            $table->text('jumlah');
        });

        Schema::create('tingkat_pendidikan', function (Blueprint $table) {
            $table->text('tingkat')->unique();
            $table->text('jumlah');
        });

        Schema::create('jenis_pekerjaan', function (Blueprint $table) {
            $table->text('pekerjaan')->unique();
            $table->text('jumlah');
        });

        Schema::create('kelahiran_kematian', function (Blueprint $table) {
            $table->text('tahun')->unique();
            $table->text('kelahiran');
            $table->text('kematian');
        });

        Schema::create('profil_struktur', function (Blueprint $table) {
            $table->text('nama')->unique();
            $table->text('jabatan');
            $table->text('foto_profil');
        });

        Schema::create('lembaga_desa', function (Blueprint $table) {
            $table->text('nama')->unique();
            $table->text('singkatan')->nullable();
            $table->text('alamat');
        });

        Schema::create('sumber_pertanian', function (Blueprint $table) {
            $table->text('jenis')->unique();
            $table->text('luas_lahan');
            $table->text('hasil');
        });

        Schema::create('sumber_peternakan', function (Blueprint $table) {
            $table->text('jenis')->unique();
            $table->text('jumlah_ternak');
            $table->text('hasil');
        });

        Schema::create('wisata_desa', function (Blueprint $table) {
            $table->text('nama')->unique();
            $table->text('deskripsi');
            $table->text('foto_wisata');
        });

        Schema::create('berita', function (Blueprint $table) {
            $table->text('judul');
            $table->text('tanggal');
            $table->text('foto_berita');
        });

        Schema::create('galeri', function (Blueprint $table) {
            $table->text('judul');
            $table->text('tanggal');
            $table->text('foto_galeri');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunaan_lahan');
        Schema::dropIfExists('fasilitas_pendidikan');
        Schema::dropIfExists('fasilitas_kesehatan');
        Schema::dropIfExists('jenis_kelamin');
        Schema::dropIfExists('tingkat_pendidikan');
        Schema::dropIfExists('jenis_pekerjaan');
        Schema::dropIfExists('kelahiran_kematian');
        Schema::dropIfExists('profil_struktur');
        Schema::dropIfExists('lembaga_desa');
        Schema::dropIfExists('sumber_pertanian');
        Schema::dropIfExists('sumber_peternakan');
        Schema::dropIfExists('wisata_desa');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('galeri');
    }
};
