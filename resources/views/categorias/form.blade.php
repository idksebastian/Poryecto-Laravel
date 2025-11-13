<div class="block gap-2">
    <div>
    <label for="nombre" class="block text-gray-700 font-medium mb-1 min-w-l">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) ?? ''}}"
    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black min-w-xl">
</div>
<div>
    <label for="descripcion" class="block text-gray-700 font-medium mb-4 min-w-xl">Descripción</label>
    <textarea id="descripcion" name="descripcion" rows="4"
    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">{{ old('descripcion', $categoria->descripcion) ?? ''}}</textarea>
</div>
