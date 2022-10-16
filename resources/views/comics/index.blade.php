@extends('layout.app')

lista fumetti
@section('content')
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
            </tr>
           @endforeach
        
        </tbody>
    </table>
@endsection
