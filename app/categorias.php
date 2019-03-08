<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categorias extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'idc';
    Protected $fillable=['idc','categoria','descripcion'];
    protected $date=['deleted_at'];
}
