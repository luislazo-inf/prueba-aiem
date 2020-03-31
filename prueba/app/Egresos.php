<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class egresos extends Model
{
    protected $table = 'egresos';

    protected $fillable = ['id', 'codigo', 'descripcion', 'egresos'];
}
