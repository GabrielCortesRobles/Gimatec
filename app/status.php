<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class status extends Model
{   
    use SoftDeletes;
   
    protected $primaryKey = 'idstatus';

    protected $fillable=['idstatus','statuss','descripcion'];
                            
    protected $date = ['deleted_at'];
}
