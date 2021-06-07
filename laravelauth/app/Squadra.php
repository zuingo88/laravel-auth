<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Squadra extends Model
{
    protected $fillable = [

        'name',
        'points',
        'nazione_id',
    ];

    public function nazione() {

        return $this->belongsTo(Nazione::class);
    }

    public function giocatores() {

        return $this->belongsToMany(Giocatore::class);
    }
}
