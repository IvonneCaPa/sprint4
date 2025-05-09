@extends('layouts.plantilla')

@section('title', 'Crear Galeria')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Crear Galería</h1>
        
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('galleries.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título de la cita:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="site" class="block text-sm font-medium text-gray-700 mb-1">Lugar:</label>
                    <textarea name="site" id="site" cols="30" rows="5"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('site') }}</textarea>
                    @error('site')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Fecha:</label>
                    <input type="date" name="date" id="date" value="{{ old('date') }}"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                        Crear Galería
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection