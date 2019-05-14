<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_kegiatans', function (Blueprint $table) {
            $table->increments('idEventKegiatan');
            $table->integer('idEvent')->unsigned();
            $table->foreign('idEvent')
                ->references('idEvent')->on('events')
                ->onDelete('cascade');
            $table->integer('idJeniskegiatan')->unsigned();
            $table->foreign('idJeniskegiatan')
                ->references('idJeniskegiatan')->on('jenis_kegiatans')
                ->onDelete('cascade');
            $table->integer('idKegiatan')->unsigned();
            $table->foreign('idKegiatan')
                ->references('idKegiatan')->on('kegiatans')
                ->onDelete('cascade');
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
        Schema::dropIfExists('kegiatan_events');
    }
}
