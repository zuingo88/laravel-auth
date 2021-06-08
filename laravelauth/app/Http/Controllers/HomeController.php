<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nazione;
use App\Squadra;
use App\Giocatore;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function squadra($id) 
    {
        $squadra = Squadra::findOrFail($id);

        return view('pages.squadra', compact('squadra'));
    }

    public function create()
    {
        $naziones = Nazione::all();

        $giocatores = Giocatore::all();

        return view('pages.create', compact('naziones', 'giocatores'));
    }

    public function store(Request $request)
    { 
        $validated = $request->validate(
            [
                'name'=>'required|string|min:3',
                'points'=>'required|integer|min:5|max:100'
            ]
        );

        $nazione = Nazione::findOrFail($request->get('nazione_id'));

        $squadra = Squadra::make($validated);
        $squadra->nazione()->associate($nazione);
        $squadra->save();

        $squadra->giocatores()->attach($request->get('giocatore_id'));
        $squadra->save();

        return redirect()->route('initial');
    }

    public function edit($id) 
    {
        $squadra = Squadra::findOrFail($id);
        $naziones =Nazione::all();
        $giocatores = Giocatore::all();

        return view('pages.edit', compact('squadra', 'naziones', 'giocatores'));
    }

    public function update(Request $request, $id) 
    {
        $validated = $request->validate(
            [
                'name'=>'required|string|min:3',
                'points'=>'required|integer|min:5|max:100'
            ]
            );

        $squadra = Squadra::findOrFail($id);
        $squadra->update($validated);

        $nazione = Nazione::findOrFail($request->nazione_id);
        $squadra->nazione()->associate($nazione);
        $squadra->save();

        $Squadra->giocatores()->sync($request->giocatore_id);

        return redirect()->route('initial');
    }
}
