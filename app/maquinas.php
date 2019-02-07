<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class maquinas extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'idm';

    protected $fillable=['idm','nombre_maq','descripcion_maq','existencia'
                        ,'precio','archivo'];
                            
    protected $date=['deleted_at'];
}
