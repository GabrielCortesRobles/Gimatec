<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class empleados extends Model
{
    use SoftDeletes;

    protected  $primaryKey = 'ide';

    protected $fillable = ['ide','nombre_emple','apat_emple','amat_emple',
    'curp','fecha_emple','sexo_emple','tipo','id_mun','cp','localidad_emple',
    'calle_emple','num_int_emple','num_ext_emple','tele_emple','correo_emple',
    'arcivo'];

    protected $date = ['deleted_at'];
}
