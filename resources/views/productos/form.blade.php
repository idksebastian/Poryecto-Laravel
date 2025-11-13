<div class="flex gap-2">
    <div>
    <label for="nombre" class="block text-gray-700 font-medium mb-1">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) ?? ''}}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black min-w-xl">
</div>
<div>
    <label for="precio" class="block text-gray-700 font-medium mb-1">Precio</label>
    <input type="number" id="precio" name="precio" value="{{ old('precio', $producto->precio) ?? ''}}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
</div>
</div>
<div>
    <label for="stock" class="block text-gray-700 font-medium mb-1">Teléfono</label>
    <input type="number" id="stock" name="stock" value="{{ old('stock', $producto->stock) ?? ''}}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black">
</div>
<div>
    <label for="descripcion" class="block text-gray-700 font-medium mb-1">Descripción</label>
    <textarea id="descripcion" name="descripcion" rows="4" class="w-full border border-gray-300 rounded-lg px-3 x-2 focus:outline-none focus:ring-2 focus:ring-black">{{ old('descripcion', $producto->descripcion) ?? ''}}</textarea>
</div>
<div class="col-md-6">
    <label class="form-label">Categoría</label>
    <select name="categoria_id" class="form-select @error('categoria_id') is-invalid @enderror" required>
        <option value="">Seleccione una categoría</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id', $producto?->categoria_id) == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>
    @error('categoria_id') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>