<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table="kegiatans";
	protected $primaryKey="idKegiatan";
	protected $fillable=['namaKegiatan','tanggalKegiatan', 'waktuKegiatan'];
}
