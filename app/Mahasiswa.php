<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table    = 'mahasiswa';
    protected $fillable = ['id','name', 'tgl_lahir', 'tempat_lahir', 'telepon', 'alamat', 'gender', 'foto'];
    public    $timestamps = false;
}
