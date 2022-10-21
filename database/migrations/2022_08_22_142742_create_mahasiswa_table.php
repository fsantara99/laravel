<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('id_fakultas')->unsigned();
            $table->bigInteger('id_jurusan')->unsigned();
            $table->integer('nim')->unique();
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('ttl');
            $table->timestamps();
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
