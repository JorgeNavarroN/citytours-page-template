<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lugar;

class Viaje extends Model
{
    use HasFactory;
    protected $fillable = [
        'destino',
        'fecha_inicio',
        'fecha_fin',
        'precio',
        'descripcion',
        'user_id',
    ];
    public function lugar()
    {
        return $this->belongsTo(Lugar::class);
    }
}
