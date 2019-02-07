<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class servicios extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'ids';

    protected $fillable = ['ids','servicios'];

    protected $date = ['deleted_at'];
}
