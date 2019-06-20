<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('idKegiatan');
            $table->integer('idEvent')->unsigned();
            $table->foreign('idEvent')
                ->references('idEvent')->on('events')
                ->onDelete('cascade');
            $table->string('namaKegiatan', 50);
            $table->date('tanggalKegiatan');
            $table->time('waktuKegiatan');
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
        Schema::dropIfExists('kegiatans');
    }
}
