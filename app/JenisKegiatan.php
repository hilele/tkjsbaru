<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    protected $table="jenisKegiatan";
	protected $primaryKey="idJenisKegiatan";
	protected $fillable=['namaJenisKegiatan'];
}
