@extends('layout.main-layout')

@section('content')


    <main>

       <form class="form" method="POST" action="{{route('store')}}">

        @csrf
        @method('POST')

            <label for="name">Nome:</label>
            <input type="text" name="name">

            <label for="lastname">Cognome:</label>
            <input type="text" name="lastname">

            <label for="date_of_birth">Data di nascita:</label>
            <input type="date" name="date_of_birth">

            <span>Documento:</span>
            
            <div class="document">

                <label for="document_type">Carta d'identità:</label>
                <input type="radio" name="document_type" value="CI">

                <label for="document_type">Patente:</label>
                <input type="radio" name="document_type" value="Driver License">

            </div>
            
                <label for="document_number">Numero documento:</label>
                <input type="text" name="document_number">


            <button type="submit">Aggiungi</button>



       </form>

    </main>

    <a class="turnback" href="{{ route('home') }}">Torna alla Home</a>

@endsection