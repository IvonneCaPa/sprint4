@extends('layouts.plantilla')

@section('title', 'Editar Cita')

@section('content')
    <h1>Editar Cita</h1>
    <form action= {{route('quotes.update', $quote)}}  method="POST">

        @csrf

        @method('PUT')

        <label>
            Titulo de la cita:
            <input type="text" name="title" id="" value= {{ old('title', $quote->title) }} > 
        </label>
        @error('title')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>

        <label>
            Descripción de la cita:
            <textarea name="description" id="" cols="30" rows="5">{{ old('description', $quote->description) }}</textarea>
        </label>
        @error('description')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>
        <label>
            Lugar de la cita:
            <input type="text" name="site" id="" value={{ old('site', $quote->site) }}>
        </label>
        @error('site')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>

        <label>
            Fecha y Hora de la cita:
            inp
            <input type="datetime-local" name="dateTime" id="" value={{ old('dateTime', $quote->dateTime) }}>
        </label>
        @error('dateTime')
        <br>
        <strong style="color: red">{{ $message }}</strong>
        @enderror
        <br><br>
        <button type="submit">Actualizar Cita</button>
    </form>

@endsection