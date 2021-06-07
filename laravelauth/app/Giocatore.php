<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giocatore extends Model
{
    protected $fillable = [

        'firstname',
        'lastname',
        'age'
    ];

    public function squadras() {

        return $this->belongsToMany(Squadra::class);
    }
}
