@extends('layout')

@section('title', 'Lista de Vendedores')
@section('nav-titulo', 'Vendedores')
@section('contenido')
<div class="my-10 flex justify-end">
    <a href="{{ route('vendedores.create') }}" class="p-4 bg-blue-600 rounded text-white font-xl font-semibold hover:bg-blue-700">Nuevo +</a>
</div>
@if($vendedores->count())

<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 text-left">ID</th>
                <th class="py-3 px-4 text-left">Nombre</th>
                <th class="py-3 px-4 text-left">Cargo</th>
                <th class="py-3 px-4 text-left">Teléfono</th>
                <th class="py-3 px-4 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($vendedores as $vend)
            <tr class="hover:bg-gray-50">
                <td class="py-2 px-4">{{ $vend->id }}</td>
                <td class="py-2 px-4">{{ $vend->nombre }}</td>
                <td class="py-2 px-4">{{ $vend->cargo }}</td>
                <td class="py-2 px-4">{{ $vend->telefono }}</td>
                <td class="py-2 px-4 flex gap-2">
                    <a href="{{ route('vendedores.edit', $vend) }}" 
                       class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-1 px-3 rounded transition cursor-pointer">
                        Editar
                    </a>
                    <form action="{{ route('vendedores.destroy', $vend) }}" method="post" onsubmit="return confirm('¿Desea Eliminar?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium py-1 px-3 rounded transition cursor-pointer" type="submit" >Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded">
        No hay vendedores registrados.
    </div>
@endif
@endsection
