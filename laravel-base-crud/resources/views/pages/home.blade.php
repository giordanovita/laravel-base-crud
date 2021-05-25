@extends('layout.main-layout')

@section('content')

    <main>

        
        <ul>

            @foreach ($ospiti as $ospite)
                <li>
                    <a href="{{route('ospite' , $ospite -> id)}}">
                        <h4>Nome: {{$ospite-> name}}</h4> 
                        <h4>Cognome: {{$ospite-> lastname}}</h4>

                        <h5>Codice Identificativo :  {{$ospite-> id}}</h5>
                    </a>
                </li>
            @endforeach

        </ul>

    </main>
    
@endsection