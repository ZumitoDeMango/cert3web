<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';
    
    //relacion tipo perfil -> usuario
    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class);
    }
}
