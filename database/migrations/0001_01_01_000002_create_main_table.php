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
            $table->integer('id')->primary();
            $table->text('nama')->unique();
            $table->integer('jumlah');
        });

        Schema::create('fasilitas_pendidikan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('nama')->unique();
            $table->integer('jumlah');
        });

        Schema::create('fasilitas_kesehatan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('nama')->unique();
            $table->integer('jumlah');
        });

        Schema::create('jenis_kelamin', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('jenis')->unique();
            $table->integer('jumlah');
        });

        Schema::create('tingkat_pendidikan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('tingkat')->unique();
            $table->integer('jumlah');
        });

        Schema::create('jenis_pekerjaan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('pekerjaan')->unique();
            $table->integer('jumlah');
        });

        Schema::create('kelahiran_kematian', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('tahun')->unique();
            $table->integer('kelahiran');
            $table->integer('kematian');
        });

        Schema::create('profil_struktur', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('nama')->unique();
            $table->text('jabatan');
            $table->text('foto_profil');
        });

        Schema::create('lembaga_desa', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('nama')->unique();
            $table->text('singkatan')->nullable();
            $table->text('alamat');
        });

        Schema::create('sumber_pertanian', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('jenis')->unique();
            $table->float('luas_lahan');
            $table->integer('hasil');
        });

        Schema::create('sumber_peternakan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('jenis')->unique();
            $table->integer('jumlah_ternak');
            $table->integer('pemilik');
        });

        Schema::create('berita', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('judul');
            $table->dateTime('tanggal');
            $table->text('penulis');
            $table->text('foto_berita');
            $table->longText('isi_berita');
            $table->timestamp('created_at');
            $table->Timestamp('updated_at')->nullable();
        });

        Schema::create('galeri', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('judul');
            $table->dateTime('tanggal');
            $table->text('foto_galeri');
            $table->longText('penjelasan');
        });

        Schema::create('galeri_video', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('judul');
            $table->dateTime('tanggal');
            $table->text('youtubeid');
            $table->longText('penjelasan');
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
        Schema::dropIfExists('berita');
        Schema::dropIfExists('galeri');
    }
};
