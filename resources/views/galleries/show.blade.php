@extends('layouts.plantilla')

@section('title', 'Galeria')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">{{ $gallery->title }}</h1>
        
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-800 mb-1">Detalles de la Galería</h2>
                
                <div class="mb-4">
                    <p class="text-sm font-medium text-gray-700">Lugar:</p>
                    <p class="text-gray-800 mt-1">{{ $gallery->site }}</p>
                </div>
                
                <div class="mb-6">
                    <p class="text-sm font-medium text-gray-700">Fecha:</p>
                    <p class="text-gray-800 mt-1">{{ $gallery->date }}</p>
                </div>
            </div>
            
            <div class="flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-4 md:justify-between">
                <a href="{{ route('galleries.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded text-center">
                    Volver a todas las Galerias
                </a>
                
                <a href="{{ route('galleries.edit', $gallery) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded text-center">
                    Editar Galería
                </a>
                
                <form action="{{ route('galleries.destroy', $gallery) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded w-full">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection