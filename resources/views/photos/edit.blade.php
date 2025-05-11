@extends('layouts.plantilla')

@section('title', 'Editar Foto')

@section('content')
    <div class="container mx-auto px-4 py-1">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Foto de la Galería: {{ $gallery->title }}</h1>
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $photo->location) }}" alt="{{ $photo->title }}" class="max-w-full h-auto mx-auto">
                    </div>
                    <form action="{{ route('galleries.photos.update', [$gallery, $photo]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 font-medium mb-2">Título:</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $photo->title) }}" class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out" required>
                            @error('title')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-gray-700 font-medium mb-2">Cambiar Imagen (opcional):</label>
                            <input type="file" name="image" id="image" class="hidden" accept="image/*">
                            <div class="flex items-center space-x-3">
                                <button type="button" onclick="document.getElementById('image').click()" 
                                        class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-md shadow-sm transition duration-150 ease-in-out">
                                    Seleccionar imagen
                                </button>
                                <span id="image-chosen" class="text-gray-500">Ninguna imagen seleccionada</span>
                            </div>            
                            @error('image')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                document.getElementById('image').addEventListener('change', function() {
                                    const fileChosen = document.getElementById('image-chosen');
                                    if(this.files.length > 0) {
                                        fileChosen.textContent = this.files[0].name;
                                    } else {
                                        fileChosen.textContent = 'Ninguna imagen seleccionada';
                                    }
                                });
                            });
                        </script>

                        <div class="flex items-center justify-between mt-4">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Actualizar
                            </button>
                            <a href="{{ route('galleries.photos.index', $gallery) }}" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection