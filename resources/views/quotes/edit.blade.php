@extends('layouts.plantilla')

@section('title', 'Editar Cita')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Editar Cita</h1>
        
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('quotes.update', $quote) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Titulo de la cita:
                        <input type="text" name="title" value="{{ old('title', $quote->title) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200">
                    </label>
                    @error('title')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Descripción de la cita:
                        <textarea name="description" cols="30" rows="5" 
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200">{{ old('description', $quote->description) }}</textarea>
                    </label>
                    @error('description')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Lugar de la cita:
                        <input type="text" name="site" value="{{ old('site', $quote->site) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200">
                    </label>
                    @error('site')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">
                        Fecha y Hora de la cita:
                        <input type="datetime-local" name="dateTime" value="{{ old('dateTime', $quote->dateTime) }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200">
                    </label>
                    @error('dateTime')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Actualizar Cita
                    </button>
                </div>
            </form>
        </div>
        
        <div class="mt-6 flex justify-center">
            <a href="{{ route('quotes.show', $quote) }}" class="text-blue-500 hover:text-blue-700 font-medium">
                Volver a la cita
            </a>
        </div>
    </div>
@endsection