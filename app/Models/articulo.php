<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    use HasFactory;


    protected $table = 'articulos';

    public $fillable = ['nombre','descripcion','categoria_id','precio'];

    public function categoria()
    {
        return $this->belongsTo(categoria::class);


    }

    public function linea()
    {
        return $this->belongsTo(Linea::class);
    }
}
