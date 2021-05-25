@extends('layout.main-layout')

@section('content')


    <main class="datail-section">

        <ul class="details">
            <li >
                <h4>Nome: {{$ospite-> name}}</h4> 
                <h4>Cognome: {{$ospite-> lastname}}</h4>
                <h4>Data di nascita: {{$ospite-> date_of_birth}}</h4>
                <h4>Documento registrato: {{$ospite-> document_type}}</h4>
                <h4>Dettagli documento: {{$ospite-> document_number}}</h4>
                
                <h5>Codice Identificativo :  {{$ospite-> id}}</h5>

            </li>
        </ul>
    </main>
    <a class="turnback" href="{{ route('home') }}">Torna alla Home</a>

@endsection