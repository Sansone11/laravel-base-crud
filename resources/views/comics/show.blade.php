@extends('layout.app')

{{-- @section('mataTitle', 'Comics') --}}

@section('content')

    
<div class="container_show">
    <h1>{{$comic->title}}</h1>
    <div class="description">
        <ul>
            <li>
               <span>Descrizione</span> <p>{{$comic->description}}</p>
            </li>
            <li>
                <p>{{$comic->thumb}}</p>
            </li>
            <li>
               <span>Prezzo</span> <p>{{$comic->price}}</p>
            </li>
            <li>
                <span>Serie</span>{{$comic->series}}
            </li>
            <li>
                <span>Data di uscita</span>{{$comic->sale_date}}
            </li>
            <li>
               <span>Genere</span> {{$comic->type}}
            </li>
        </ul>
        
    </div>
</div>


@endsection