<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // para crear datos de prueba mediante una fabrica
    use HasFactory;
    
    //para enviar de forma masiva desde formularios
    protected $fillable = ["category_name", "active"];
}
