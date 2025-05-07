@extends('layouts.plantilla')

@section('title', 'Crear Cita')

@section('content')
    <h1>Crear Cita</h1>
    <form action="{{ route('quotes.store') }}" method="POST">

        @csrf

        <label>
            Titulo de la cita:
            <input type="text" name="title" id="" value={{ old('title') }}>
        </label>
        @error('title')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>

        <label>
            Descripción de la cita:
            <textarea name="description" cols="30" rows="5">{{ old('description') }}</textarea>
        </label>
        @error('description')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>

        <label>
            Lugar de la cita:
            <input type="text" name="site" value="{{ old('site') }}">
        </label>
        @error('site')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>

        <label>
            Fecha y Hora de la cita:
            <input type="datetime-local" name="dateTime" value="{{ old('dateTime') }}">
        </label>
        @error('dateTime')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>

        <button type="submit">Crear Cita</button>
    </form>
@endsection