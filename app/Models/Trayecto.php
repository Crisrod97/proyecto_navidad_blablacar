<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayecto extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function pasajeros()
    {
        return $this->belongsTo(Pasajero::class);
    }

    public function conductores()
    {
        return $this->belongsTo(Conductor::class);
    }

}
