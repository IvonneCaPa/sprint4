@extends('layouts.plantilla')

@section('title', 'Agregar Foto')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Agregar Foto a la Galería: {{ $gallery->title }}</h1>
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('galleries.photos.store', $gallery) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Título:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out" required>
                    @error('title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="location" class="block text-gray-700 font-medium mb-2">Ubicación de la Foto:</label>
                    <input type="text" name="location" id="location" value="{{ old('location') }}" class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    @error('location')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="photo" class="block text-gray-700 font-medium mb-2">Seleccionar Imagen:</label>
                    <input type="file" name="photo" id="photo" class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out" accept="image/*" required>
                    @error('photo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Agregar Foto
                    </button>
                    <a href="{{ route('galleries.photos.index', $gallery) }}" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
