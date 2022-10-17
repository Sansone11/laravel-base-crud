@extends('layout.app')

lista fumetti
@section('content')
    <section>
        <div class="input__container"style='display:flex;justify content;flex-end'>
            <a href="{{route('comics.create')}}">Aggiungi un fumetto</a>
        </div>
    </section>
    <table>
        <thead>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>
                   <a href="{{route('comics.show',$comic)}}">
                    {{$comic->title}}
                </a>
                </td>
                <td>{{$comic->description}}</td> 
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('comics.edit',$comic)}}">
                        Edit
                    </a>
                </td>
            </tr>
           @endforeach
        
        </tbody>
    </table>
@endsection
