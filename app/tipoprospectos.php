<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class tipoprospectos extends Model
{
   
    protected $primaryKey = 'idstatus';

    protected $fillable=['idstatus','statuss','descripcion'];
                            
    protected $date = ['deleted_at'];
}
