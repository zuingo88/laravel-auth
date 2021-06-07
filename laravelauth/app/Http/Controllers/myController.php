<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function initial() {

        return view('pages.initial');
    }
}
