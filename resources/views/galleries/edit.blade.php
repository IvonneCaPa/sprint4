@extends('layouts.plantilla')

@section('title', 'Editar Galeria')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Editar Galería</h1>
        
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{route('galleries.update', $gallery)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título de la galería:</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $gallery->title) }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="site" class="block text-sm font-medium text-gray-700 mb-1">Lugar:</label>
                    <input type="text" name="site" id="site" value="{{ old('site', $gallery->site) }}"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('site')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Fecha:</label>
                    <input type="date" name="date" id="date" value="{{ old('date', $gallery->date) }}"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('galleries.show', $gallery) }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">
                        Cancelar
                    </a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                        Actualizar Galería
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection