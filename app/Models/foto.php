<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    use HasFactory;
    protected $fillable =[
            
       
        'descripcion',
        'ruta_foto',
        'id_categoria',
        'id_user',
        'calificacion',            

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Models\categoria', 'id_categoria');
    }
}
