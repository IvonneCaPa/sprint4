@extends('layouts.plantilla')

@section('title', 'Galeria')

@section('content')
    <div class="container mx-auto px-4 py-1">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6"> {{$gallery->title}} </h1>

        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-1">Lugar:</h2>
                <p class="text-gray-600"> {{$gallery->site}} </p>
            </div>
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-1">Fecha:</h2>
                <p class="text-gray-600"> {{$gallery->date->format('d/m/Y')}} </p>  
            </div>
            <div class="mb-4">
                <p>{{$gallery->photos->count()}} fotos</p>
                <a href="{{ route('galleries.photos.index', $gallery) }}" class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300 mx-auto block text-center">
                    Agregar/Eliminar Fotos</a>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('galleries.edit', $gallery) }}" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">Editar Galería</a>

                <form action="{{ route('galleries.destroy', $gallery) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-300">Eliminar</button>
                </form>
            </div>    
        </div>
    </div>
@endsection