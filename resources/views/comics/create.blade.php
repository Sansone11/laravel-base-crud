@extends('layout.app')


@section('content')

    
<section>
    <div class="container">
        <h1>Crea un tuo fumetto</h1>
    </div>
    <div>
        <form action="{{route('comics.store')}}"method="POST">

            @csrf

            <p>
                <label for="title">Titolo</label>
                <input type="text" id='title' placeholder="Inserisci un titolo" default="name">
            </p>
            <p>
                <label for="description">Descrizione</label>
                <input type="text" id='description' placeholder="Inserisci una descrizione">
            </p>
            <p>
                <label for="thumb">Copertina</label>
                <input type="text" id='thumb' placeholder="Inserisci un link ad immagine">
            </p>
            <p>
                <label for="price">Prezzo</label>
                <input type="text" id='price' placeholder="Inserisci il prezzo">
            </p>
            <p>
                <label for="series">Serie</label>
                <input type="text" id='series' placeholder="Inserisci la serie">
            </p>
            <p>
                <label for="sale_date">Data d'uscita</label>
                <input type="date" id='sale_date' placeholder="Inserisci una data di lancio">
            </p>
            <p>
                <label for="type">Tipo</label>
                <input type="text" id='type' placeholder="Inserisci un genere">
            </p>
            <p>
                <input type="submit"value="Salva">
            </p>
        </form>
    </div>
    
</section>

@endsection
