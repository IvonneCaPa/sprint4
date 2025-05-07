@extends('layouts.plantilla')

@section('title', 'Cita')

@section('content')
    <h1>La cita es: {{ $quote->title }}</h1>
    <a href= {{route('quotes.index')}} >Volver a todas las citas</a>
    <br>
    <a href= {{ route('quotes.edit', $quote) }} >Editar Curso</a>
    <br>
    <p>Descripción: {{ $quote->description }} </p>
    <p>Lugar: {{ $quote->site }} </p>
    <p>Fecha y Hora: {{ $quote->dateTime }} </p>

    <form action={{ route('quotes.destroy', $quote) }} method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
