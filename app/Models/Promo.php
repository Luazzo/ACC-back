<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'texte', 'debut', 'fin', 'image', 'compagny_id'
    ];

    public function compagny_id()
    {
        return $this->belongsTo(Compagny::class, 'foreign_key');
    }
}
