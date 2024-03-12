<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $prymarykey = 'id';
    protected $fillable = ['nombre', 'telefono', 'correo', 'direccion'];
    protected $guarded = [];
}
