@extends('layouts.plantilla')

@section('title', 'Crear Galería')

@section('content')

    <div class="container mx-auto px-4 py-1">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Crear Galería</h1>
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('galleries.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Nombre de la galería:
                        <input type="text" name="title" value="{{ old('title') }}" 
                        class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    </label>
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Lugar:
                        <input type="text" name="site" value="{{ old('site') }}" 
                        class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    </label>
                    @error('site')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="">
                        Fecha:
                        <input type="date" name="date" value="{{ old('date') }}"
                        class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    </label>
                    @error('date')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Crear Galería
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection