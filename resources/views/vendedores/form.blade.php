<div>
    <label for="nombre" class="block text-gray-700 font-medium mb-1">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $vendedor->nombre) ?? ''}}"
    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
</div>
<div>
    <label for="cargo" class="block text-gray-700 font-medium mb-1">Cargo</label>
    <input type="text" id="cargo" name="cargo" value="{{ old('cargo', $vendedor->cargo) ?? ''}}"
    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
</div>
<div>
    <label for="telefono" class="block text-gray-700 font-medium mb-1">Teléfono</label>
    <input type="number" id="telefono" name="telefono" value="{{ old('telefono', $vendedor->telefono) ?? ''}}"
    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
</div>