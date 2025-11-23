<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';
    protected $primaryKey = 'idrole_user';
    public $timestamps = false;
<<<<<<< HEAD

    // Relasi ke User (many-to-one)
=======
    protected $fillable = ['iduser', 'idrole', 'status'];

>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }

<<<<<<< HEAD
    // Relasi ke Role (many-to-one)
=======
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
    public function role()
    {
        return $this->belongsTo(Role::class, 'idrole', 'idrole');
    }
<<<<<<< HEAD
    
}

=======
}
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
