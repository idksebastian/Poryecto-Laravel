@extends('layout')

@section('title', 'Crear Vendedor')

@section('contenido')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-4 text-gray-800">Crear nuevo vendedor</h1>
    
    <form action="{{ route('vendedores.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="nombre" class="block text-gray-700 font-medium mb-1">Nombre</label>
            <input type="text" id="nombre" name="nombre" 
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="flex gap-4">
            <div>
            <label for="cargo" class="block text-gray-700 font-medium mb-1">Cargo</label>
            <input type="text" id="cargo" name="cargo"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label for="telefono" class="block text-gray-700 font-medium mb-1">Teléfono</label>
            <input type="number" id="telefono" name="telefono"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        </div>

        <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition cursor-pointer">
            Guardar
        </button>
    </form>
</div>
@endsection
