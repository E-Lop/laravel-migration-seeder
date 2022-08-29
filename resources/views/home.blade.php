@extends('layouts.app')

@section('main-content')
    <h1>Offerta viaggi organizzati</h1>

    <div class="travel-wrapper">
        @foreach ($travels as $travel)
            {{-- singolo viaggio --}}
            <div class="single-travel">
                <div>Codice Riferimento: {{$travel->reference}}</div>
                <div>Destinazione: {{$travel->destinations}}</div>
                <div>Durata in giorni: {{$travel->duration}}</div>
                <div>Prezzo: {{$travel->price}}&euro;</div><br>
            </div>
            
        @endforeach
    </div>
@endsection