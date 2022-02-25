<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linea extends Model
{
    use HasFactory;


    public function pedido()
    {
        return $this->belongsTo(Pedido::class);

    }

    public function articulo()
    {
        return $this->belongsToMany(Articulo::class);
    }
}
