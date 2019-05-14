<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPeserta extends Model
{
    protected $table="kegiatanPeserta";
	protected $primaryKey="idKegiatanPeserta";
	protected $fillable=['nilai'];
}
