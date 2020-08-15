<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compagny extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'lien',
        'image',
        'enabled'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
