<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('idEvent');
            $table->string('namaEvent', 50);
            $table->string('deskripsiEvent', 150)->nullable();
            $table->date('tanggalMulai');
            $table->date('perkiraanSelesai');
            $table->string('createdBy', 20);
            $table->string('deletedBy', 20)->nullable();
            $table->boolean('finished')->default(0);
            $table->tinyInteger('isDeleted')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
