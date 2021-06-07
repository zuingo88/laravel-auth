@extends('layouts.main_layout')
@section('content')

    <div class="container">

        <h1>Squadra: {{ $squadra->name }}</h1>
        <h4>Campionato di appartenza: {{ $squadra->nazione->name }} ({{ $squadra->nazione->continent }})</h4>
        <h3>Punti conquistati: {{ $squadra->points }}</h3>
        <p>
            <span>Fans: </span>
            @foreach ($squadra->giocatores as $giocatore)
                @if ($loop->last)
                    {{ $giocatore->firstname }} {{ $giocatore->lastname }} ({{ $giocatore->age }} anni).
                @else
                    {{ $giocatore->firstname }} {{ $giocatore->lastname }} ({{ $giocatore->age }} anni), 
                @endif
            @endforeach
        </p>
    </div>

@endsection
