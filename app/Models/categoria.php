<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nombre_categoria',

    ];

    public function foto()
    {
        return $this->hasone('App\Models\foto');
    }

   
}