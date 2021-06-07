<?php

namespace App\Http\Controllers;

use App\Nazione;
use App\Squadra;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function initial() {

        $squadras = Squadra::all();

        $naziones = Nazione::all();

        return view('pages.initial', compact('squadras', 'naziones'));
    }
}
