<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisHewan extends Model
{
    protected $table = 'jenis_hewan'; // harus sama persis dengan database
    protected $primaryKey = 'idjenis_hewan';
    public $timestamps = false;
    protected $fillable = ['nama_jenis_hewan'];
}

