<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticable; 

class Usuario extends Authenticable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey='correo';
    protected $keyType='string';

    //Relacion usuario -> tipo perfil
    public function perfil():BelongsTo
    {
        return $this->belongsTo(Perfil::class);
    }




}
