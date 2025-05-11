@extends('layouts.plantilla')

@section('title', 'Creart')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Bienvenidos a la edición de eventos y galerías</h1>
        
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="text-center">
               
                <p class="text-gray-600 mb-4">Sistema de gestión de eventos y gestón de galerias</p>
                
                <div class="mt-8">
                    <a href="{{ route('quotes.index') }}" class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded">
                        Ver todos los eventos</a>
                </div>
                    <div class="mt-8">
                    <a href="{{ route('galleries.index') }}" class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded">
                        Ver todas las galerias
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection