@extends('layouts.plantilla')

@section('title', 'Creart')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Bienvenidos a la página principal de Creart</h1>
        
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="text-center">
                <!-- Aquí puedes añadir más contenido para tu página principal -->
                <p class="text-gray-600 mb-4">Sistema de gestión de citas</p>
                
                <div class="mt-8">
                    <a href="{{ route('quotes.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Ver todas las citas
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection