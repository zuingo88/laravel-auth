<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nazione extends Model
{
    protected $fillable = [

        'name',
        'continent',
    ];

    public function squadras() {

        return $this->hasMany(Squadra::class);
    }
}
