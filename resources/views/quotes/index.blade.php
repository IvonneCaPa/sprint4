@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content')
    <h1>Listado de citas</h1>
    <a href={{route('quotes.create')}}>Crear cita</a>
    <ul>
        @foreach ($quotes as $quote)
            <li>
                <a href="{{route('quotes.show', $quote)}}">{{ $quote->title }}</a>
            </li>
        @endforeach        
    </ul>


    {{ $quotes->links() }}


@endsection

