@extends('layouts.main_layout')
@section('content')

    <div id="initial">
        <div class="container">
            <h1>Campionati</h1>
            <ul class="">

                @foreach ($naziones as $nazione)
                    <li>
                        <div class="mycard flex_col just_cen border">
                            <h1>{{ $nazione->name }} ({{ $nazione->continent }})</h1>
                            <h5>Partecipanti: {{ $nazione->squadras->count() }}</h5>

                            @foreach ($nazione->squadras as $squadra)
                            <a href="{{ route('squadra', $squadra->id) }}">
                                <h3>{{ $squadra->name }} ({{ $squadra->points }} punti)</h3>
                            </a>
                                <p>Fans: {{ $squadra->giocatores->count() }} </p>
                            @endforeach

                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

@endsection
