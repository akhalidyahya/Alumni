<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('angkatan',5);
            $table->string('jurusan',50);
            $table->string('prodi',50);
            $table->double('ipk');
            $table->string('skripsi',100);
            $table->string('no_telp',25);
            $table->string('email',50);
            $table->string('instagram',20);
            $table->string('web',30)->nullable();
            $table->string('sosmed',50)->nullable();
            $table->string('alamat',120);
            $table->string('kegiatan',20);
            $table->string('lainnya',50)->nullable();
            $table->string('tempat_kerja',50)->nullable();
            $table->string('posisi',20)->nullable();
            $table->string('jabatan',20)->nullable();
            $table->string('sertifikat',120)->nullable();
            $table->string('lomba',120)->nullable();
            $table->string('prestasi',120)->nullable();
            $table->string('minat_dosen',5);
            $table->string('status_akun',1)->default('0');
            $table->string('status_alumni',1)->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
