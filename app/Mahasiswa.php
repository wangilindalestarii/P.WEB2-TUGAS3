<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table    = 'Mahasiswa';
    protected $fillable = ['user_id','name', 'tgl_lahir', 'tempat_lahir', 'telepon', 'alamat', 'gender', 'foto'];
    public    $timestamp = false;
}
