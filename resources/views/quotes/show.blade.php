@extends('layouts.plantilla')

@section('title', 'Cita')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">{{ $quote->title }}</h1>
        
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-1">Descripción:</h2>
                <p class="text-gray-600">{{ $quote->description }}</p>
            </div>
            
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-1">Lugar:</h2>
                <p class="text-gray-600">{{ $quote->site }}</p>
            </div>
            
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-1">Fecha y Hora:</h2>
                <p class="text-gray-600">{{ $quote->dateTime }}</p>
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('quotes.edit', $quote) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">
                    Editar Cita
                </a>
                
                <form action="{{ route('quotes.destroy', $quote) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-300">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
        
        <div class="mt-6 flex justify-center">
            <a href="{{ route('quotes.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">
                Volver a todas las citas
            </a>
        </div>
    </div>
@endsection
