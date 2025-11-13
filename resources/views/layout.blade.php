<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD Vendedores')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-8 py-6 flex justify-between items-center">
            <h2 class="text-2xl">@yield('nav-titulo', 'Layout')</h2>
            <div class="">
                <a href="{{ route('productos.index') }}" class="bg-transparent border border-white border-solid border-1 text-white hover:bg-white hover:text-black text-lg font-medium p-3 px-3 rounded transition cursor-pointer mr-4">
                Productos
            </a>
            <a href="{{ route('vendedores.index') }}" class="bg-transparent border border-white border-solid border-1 text-white hover:bg-white hover:text-black text-lg font-medium p-3 px-3 rounded transition cursor-pointer mr-4">
                Vendedores
            </a>
            <a href="{{ route('categorias.index') }}" class="bg-transparent border border-white border-solid border-1 text-white hover:bg-white hover:text-black text-lg font-medium p-3 px-3 rounded transition cursor-pointer mr-4">
                Categorias
            </a>
            </div>

        </div>
    </nav>

    <main class="flex-grow max-w-7xl mx-auto px-4 py-6">
        @if(session('ok'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('ok') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
        @yield('contenido')
    </main>
</body>
</html>
