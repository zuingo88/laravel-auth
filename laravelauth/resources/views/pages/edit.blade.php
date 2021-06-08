@extends('layouts.main_layout')
@section('content')

    <div class="container flex_col align_cen">
        <h1>Modifica Squadra</h1>

        <form class="form_container flex_col" action="{{ route('update', $squadra->id) }}" method="post">

            @csrf
            @method('POST')

            <div class="label_row flex">
                <label for="name">Nome Squadra: </label>
                <input type="text" value="{{ $squadra->name }}" name="name" id="name" required>
            </div>

            <div class="label_row flex">
                <label for="points">Punti: </label>
                <input type="number" value="{{ $squadra->points }}" name="points" id="points" required>
            </div>

            <div class="label_row flex">
                <label for="nazione_id">Nazione: </label>
                <select name="nazione_id" id="nazione_id" required>
                    <option value="" selected disabled>Seleziona Nazione</option>

                    @foreach ($naziones as $nazione)
                        <option value="{{ $nazione->id }}" @if ($squadra->nazione->id == $nazione->id) selected @endif>
                            {{ $nazione->name }} ({{ $nazione->continent }})</option>
                    @endforeach

                </select>
            </div>

            <div class="label_row flex">
                <label for="giocatore_id[]">Nazione: </label>
                <select name="giocatore_id[]" id="giocatore_id[]" required multiple>
                    <option value="" selected disabled>Seleziona i Fans</option>

                    @foreach ($giocatores as $giocatore)
                        <option value="{{ $giocatore->id }}" @foreach ($squadra->giocatores as $giocatoreSquadra)  @if ($giocatoreSquadra->id==$giocatore->id)
                            selected @endif
                    @endforeach

                    >{{ $giocatore->firstname }} {{ $giocatore->lastname }}</option>
                    @endforeach

                </select>
            </div>

            <input class="new" type="submit" value="MODIFICA">
        </form>
    </div>
    </div>

@endsection
