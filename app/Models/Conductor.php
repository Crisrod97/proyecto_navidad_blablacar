<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $table = 'conductores';   //la tabla de este modelo ya no es clientes, ahora es clientes2
    public $timestamps = false;
    protected $guarded = ['id'];

    Public function opiniones() {
        return $this->hasMany(Opinion::class);
    }
    Public function trayectos() {
        return $this->hasMany(Trayecto::class);
    }
}
