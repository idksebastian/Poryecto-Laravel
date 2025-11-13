@extends('layout')

@section('title', 'Lista de Categorias')
@section('nav-titulo', 'Categorias')
@section('contenido')
<div class="my-10 flex justify-end">
    <a href="{{ route('categorias.create') }}" class="p-4 bg-transparent border-blue-600 border-solid border-2 text-blue-600 hover:bg-blue-600 hover:text-white font-bold rounded-xl">Nuevo +</a>
</div>
@if($categorias->count())

<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full border-collapse">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-3 px-4 text-left">ID</th>
                <th class="py-3 px-4 text-left">Nombre</th>
                <th class="py-3 px-4 text-left">Descripcion</th>
                <th class="py-3 px-4 text-left">Acciones</th>

            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($categorias as $cat)
            <tr class="hover:bg-gray-50">
                <td class="py-2 px-4">{{ $cat->id }}</td>
                <td class="py-2 px-4">{{ $cat->nombre }}</td>
                <td class="py-2 px-4">{{ $cat->descripcion }}</td>
                <td class="py-2 px-4 flex gap-2">
                    <a href="{{ route('categorias.edit', $cat) }}" class="bg-transparent border border-blue-600 border-solid border-1 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-medium py-1 px-3 rounded transition cursor-pointer">
                        Editar
                    </a>
                    <form action="{{ route('categorias.destroy', $cat) }}" method="post" onsubmit="return confirm('¿Desea Eliminar {{ $cat->nombre }} ?')">
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
        No hay categorias registradas.
    </div>
@endif
@endsection
