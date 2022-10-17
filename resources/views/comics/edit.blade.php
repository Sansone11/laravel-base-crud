@extends('layout.app')


@section('content')

    
<section>
    <div class="container">
        <h1>Crea un tuo fumetto</h1>
    </div>
    <div>
        <form action="{{route('comics.update',$comic)}}" method="POST">

            @csrf

            @method('PUT')

            <p>
                <label for="title">Titolo</label>
                <input type="text" name="title" value=" {{old('title',$comic->name)}}" id='title' placeholder="Inserisci un titolo" >
            @error('title')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="description">Descrizione</label>
                <input type="text"name="description" value=" {{old('description',$comic->description)}}" id='description' placeholder="Inserisci una descrizione">
                @error('description')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="thumb">Copertina</label>
                <input type="text" name="thumb" value=" {{old('thumb',$comic->thumb)}}" id='thumb' placeholder="Inserisci un link ad immagine">
                @error('thumb')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="price">Prezzo</label>
                <input type="text" name="price" value=" {{old('price',$comic->price)}}" id='price' placeholder="Inserisci il prezzo">
                @error('price')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="series">Serie</label>
                <input type="text" name="series" value=" {{old('series',$comic->series)}}" id='series' placeholder="Inserisci la serie">
                @error('series')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="sale_date">Data d'uscita</label>
                <input type="date" name="sale_date" value=" {{old('sale_date',$comic->sale_date)}}" id='sale_date' placeholder="Inserisci una data di lancio">
                @error('sale_date')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <label for="type">Tipo</label>
                <input type="text"name="type" value=" {{old('type',$comic->type)}}" id='type' placeholder="Inserisci un genere">
                @error('type')
                <div class="alert alert-danger" style="color: red">{{$message}}</div>
            @enderror
            </p>
            <p>
                <input type="submit"value="Salva">
            </p>
        </form>
    </div>
    
</section>

@endsection