<x-guest-layout>
   <form action="{{ route('articulo.store', [], false) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-6">
            <label for="nombre"
                class="text-sm font-medium text-gray-900 block mb-2 @error('nombre') text-red-500 @enderror">
                Nombre
            </label>
            <input type="text" name="nombre" id="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('titulo') border-red-500 @enderror"
                value="{{ old('titulo', $articulo->nombre) }}">
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="descripcion"
                class="text-sm font-medium text-gray-900 block mb-2 @error('descripcion') text-red-500 @enderror">
                Descripcion
            </label>
            <input type="text" name="descripcion" id="descripcion"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('descripcion') border-red-500 @enderror"
                value="{{ old('descripcion', $articulo->descripcion) }}">
            @error('descripcion')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="categoria"

            class="text-sm font-medium text-gray-900 block mb-2 @error('categoria') text-red-500 @enderror">
                Categoria
            </label>
            <select name="categoria_id" id="categoria_id">
                @foreach ($categorias as $categoria)

                <option value="{{$categoria->id}}">{{$categoria->denominacion}}</option>


                @endforeach
            </select>
            @error('categoria_id')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="precio"
                class="text-sm font-medium text-gray-900 block mb-2 @error('precio') text-red-500 @enderror">
                Precio
            </label>
            <input type="number" name="precio" id="precio"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 @error('precio') border-red-500 @enderror"
                value="{{ old('precio', $articulo->precio) }}">
            @error('precio')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>




        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
    </form>
</x-guest-layout>
