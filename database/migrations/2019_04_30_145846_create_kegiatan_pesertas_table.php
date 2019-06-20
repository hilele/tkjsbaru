<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_pesertas', function (Blueprint $table) {
            $table->bigIncrements('idKegiatanPeserta');
            $table->integer('idEventKegiatan')->unsigned();
            $table->foreign('idEventKegiatan')
                ->references('idEventKegiatan')->on('event_kegiatans')
                ->onDelete('cascade');
            $table->integer('idKegiatan')->unsigned();
            $table->foreign('idKegiatan')
                ->references('idKegiatan')->on('kegiatans')
                ->onDelete('cascade');
            $table->integer('idPeserta')->unsigned();
            $table->foreign('idPeserta')
                ->references('idPeserta')->on('pesertas')
                ->onDelete('cascade');
            $table->integer('nilai')->nullable();
            $table->tinyInteger('isDeleted')->default(0);
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
        Schema::dropIfExists('kegiatan_pesertas');
    }
}
