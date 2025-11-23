<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pemilik extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'idpemilik';
    public $timestamps = false;
    protected $fillable = ['no_wa', 'alamat'];

    public function user() {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
}
