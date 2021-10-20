<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = true;

    protected $fillable = [
      'rut',
      'nombre',
      'apellido',
      'correo',
      'id_region'
    ];

    public function region(){
      return $this->belongsTo(Region::class,'id_region');
    }
}
