@extends('layouts.main_layout')
@section('content')

    <div id="initial">
        <div class="container">
            <a href="{{ route('home') }}">wei ciao caro</a>
            <h1>Campionati</h1>

            <ul class="">

                @foreach ($naziones as $nazione)
                    <li>
                        <div class="mycard flex_col just_cen">
                            <h1>{{ $nazione->name }} ({{ $nazione->continent }})</h1>
                            <h5>Partecipanti: {{ $nazione->squadras->count() }}</h5>

                            @foreach ($nazione->squadras as $squadra)
                                <h3>{{ $squadra->name }} ({{ $squadra->points }} punti)</h3>
                                <p>Fans: {{ $squadra->giocatores->count() }} </p>
                            @endforeach

                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

@endsection
