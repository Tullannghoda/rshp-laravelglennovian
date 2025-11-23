<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'idrole';
    public $timestamps = false;
<<<<<<< HEAD

    // Relasi ke RoleUser (satu role ke banyak roleuser)
    public function roleUsers()
    {
        return $this->hasMany(RoleUser::class, 'idrole', 'idrole');
    }
}

=======
    protected $fillable = ['nama_role'];
}
>>>>>>> 5e085fd831cde74431a314b458a49ae861b2b87c
