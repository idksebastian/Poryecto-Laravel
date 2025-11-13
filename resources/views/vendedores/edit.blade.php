@extends('layout')

@section('title' , 'Editar Vendedor')

@section('contenido')

<div class="min-h-screen flex items-center justify-center">
    <div class="mx-auto bg-white p-6 rounded-lg shadow-md border-1 border-black w-80">
        <h1 class="text-xl font-semibold mb-4 text-black text-center">Editar Vendedor</h1>
        <form action="{{ route('vendedores.update', ['vendedore' => $vendedor]) }}" method="post">
        @csrf
        @method('PUT')
        @include('vendedores.form', ['vendedor' => $vendedor])
        <button type="submit" class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg transition">
                Actualizar
            </button>
        </form> 
    </div>
</div>
@endsection
