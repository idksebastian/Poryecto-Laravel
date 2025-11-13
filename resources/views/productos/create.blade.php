@extends('layout')

@section('title', 'Crear Producto')

@section('contenido')
<div class="min-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-4 text-gray-800">Crear nuevo Producto</h1>
    
    <form action="{{ route('productos.store') }}" method="POST" class="space-y-4">
        @csrf
        <div class="flex gap-2">
            <div>
            <label for="nombre" class="block text-gray-700 font-medium mb-1 min-w-xl">Nombre</label>
            <input type="text" id="nombre" name="nombre" 
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 min-w">
        </div>

        <div>
            <label for="precio" class="block text-gray-700 font-medium mb-1">Precio</label>
            <input type="number" id="precio" name="precio"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        </div>

        <div>
            <label for="stock" class="block text-gray-700 font-medium mb-1">Stock</label>
            <input type="number" id="stock" name="stock"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <label for="descripcion" class="block text-gray-700 font-medium mb-1">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4"
                      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition cursor-pointer">
            Guardar
        </button>
    </form>
</div>
@endsection
