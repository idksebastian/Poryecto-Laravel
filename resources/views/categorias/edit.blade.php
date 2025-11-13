@extends('layout')

@section('title' , 'Editar Categoria')

@section('contenido')

<div class="min-h-screen flex items-center justify-center">
    <div class="mx-auto bg-white p-6 rounded-lg shadow-md border-1 border-black min-w-4xl w-full">
        <h1 class="text-xl font-semibold mb-4 text-black text-center">Editar Producto</h1>
        <form action="{{ route('categorias.update', ['categoria' => $categoria]) }}" method="post">
        @csrf
        @method('PUT')
        @include('categorias.form', ['categoria' => $categoria])
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-lg transition cursor-pointer">
                ACTUALIZAR
        </button>
        <button route="categoria.index" class="w-full mt-2 bg-red-600 hover:bg-red-800 text-white font-semibold py-2 px-4 rounded-lg transition cursor-pointer">
            Cancelar
        </button>
        </form> 
    </div>
</div>
@endsection