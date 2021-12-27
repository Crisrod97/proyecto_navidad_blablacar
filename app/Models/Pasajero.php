<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pasajero extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
    
    Public function opiniones() {
        return $this->hasMany(Opinion::class);
    }
    Public function trayectos() {
        return $this->hasMany(Trayecto::class);
    }

    public function  getEdadAttribute($value){
         return Carbon::parse($this->f_nacimiento)->age;
    }
}
