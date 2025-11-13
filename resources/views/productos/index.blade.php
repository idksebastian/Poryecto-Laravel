@extends('layout')

@section('title', 'Lista de Productos')
@section('nav-titulo', 'Productos')
@section('contenido')
<div class="my-10 flex justify-end">
    <a href="{{ route('productos.create') }}" class="p-4 bg-transparent border-blue-600 border-solid border-2 text-blue-600 hover:bg-blue-600 hover:text-white font-bold rounded-xl">Nuevo +</a>
</div>
@if($productos->count())

<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 text-left">ID</th>
                <th class="py-3 px-4 text-left">Nombre</th>
                <th class="py-3 px-4 text-left">Precio</th>
                <th class="py-3 px-4 text-left">Stock</th>
                <th class="py-3 px-4 text-left">Descripcion</th>
                <th class="py-3 px-4 text-left">Categoria</th>
                <th class="py-3 px-4 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($productos as $prod)
            <tr class="hover:bg-gray-50">
                <td class="py-2 px-4">{{ $prod->id }}</td>
                <td class="py-2 px-4">{{ $prod->nombre }}</td>
                <td class="py-2 px-4">{{ $prod->precio }}</td>
                <td class="py-2 px-4">{{ $prod->stock }}</td>
                <td class="py-2 px-4">{{ $prod->descripcion }}</td>
                <td class="py-2 px-4">{{ $prod->categoria->nombre }}</td>
                <td class="py-2 px-4 flex gap-2">
                    <a href="{{ route('productos.edit', $prod) }}" 
                       class="bg-transparent border border-blue-600 border-solid border-1 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-medium py-1 px-3 rounded transition cursor-pointer">
                        Editar
                    </a>
                    <form action="{{ route('productos.destroy', $prod) }}" method="post" onsubmit="return confirm('¿Desea Eliminar {{ $prod->nombre }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-transparent border border-red-600 border-solid border-1 text-red-600 hover:bg-red-600 hover:text-white text-sm font-medium py-1 px-3 rounded transition cursor-pointer" type="submit" >Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded">
        No hay productos registrados.
    </div>
@endif
@endsection
