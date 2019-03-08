<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prospectos extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'idp';
    protected $fillable=['idp','nombre_pro','apat_pro','amat_pro',
    'curp_pro','fecha_pro','sexo_pro','correo_pro',
    'empresa','cp_pro','localidad_pro',
    'calle_pro','num_int_pro','num_ext_pro',
    'tele_pro','ide','idstatus','idmun'];

    protected $date=['deleted_at'];
}
