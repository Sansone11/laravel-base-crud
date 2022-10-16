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
            @foreach($comics as $c)
            <tr>
                <td>
                   <a href="{{route('comics.show',$c)}}">
                    {{$c->title}}
                </a>
                </td>
                <td>{{$c->description}}</td>
                <td>{{$c->thumb}}</td>
                <td>{{$c->price}}</td>
                <td>{{$c->series}}</td>
                <td>{{$c->sale_date}}</td>
                <td>{{$c->type}}</td>
            </tr>
           @endforeach
        
        </tbody>
    </table>
@endsection
