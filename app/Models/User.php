<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Ini kunci sukses — WAJIB ADA
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
    protected $table = 'user';
    protected $primaryKey = 'iduser';
    public $timestamps = false;

<<<<<<< HEAD
    // Relasi ke RoleUser (many to many, 1 user bisa punya 1+ role jika multi, biasanya 1)
    public function roleUser()
    {
        return $this->hasOne(RoleUser::class, 'iduser', 'iduser');
        // atau jika multi role: $this->hasMany()
    }
}

=======
    // Field harus sesuai dengan tabel mu
    protected $fillable = [
        'nama',      // <-- bukan "name", sesuai field di database!
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * Jika perlu relasi ke Pemilik
     */
    public function pemilik()
    {
        return $this->hasOne(Pemilik::class, 'iduser', 'iduser');
    }
}
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
