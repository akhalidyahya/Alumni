<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul',50);
            $table->string('isi',1000);
            $table->string('foto',50)->nullable();
            $table->string('kategori',20);
            $table->integer('alumni_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('lowongans', function (Blueprint $table) {
            $table->foreign('alumni_id')->references('id')->on('alumnis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongans');
    }
}
