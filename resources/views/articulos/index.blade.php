<x-guest-layout>

    <table class="table-auto">
        <thead>
            <th class="px-6 py-2 text-gray-500">
                Nombre
            </th>
            <th class="px-6 py-2 text-gray-500">
                Descripcion
            </th>
            <th class="px-6 py-2 text-gray-500">
                Categoria
            </th>
            <th class="px-6 py-2 text-gray-500">
                Precio
            </th>

        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->categoria->denominacion }}</td>
                    <td>{{ $articulo->precio }}</td>

                    <td> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        <a href="articulo/carrito/{{ $articulo->id }}">Añadir</a>
                        </button></td>


                        <td> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            <form action="{{ route('articulo.destroy' , $articulo->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                                <input name="_method" type="hidden" value="DELETE">
                              </form>
                            </td>
                            </button>


                </tr>
            @endforeach


        </tbody>
    </table>
    <hr size="20px" color="black"/>
    <h1>Este es tu carrito</h1>
    @if ($carrito)
        @foreach ($carrito as $articulo)
            {{ $articulo }}
        @endforeach
    @endif

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href="articulo/create">Crear Articulo</a>

</x-guest-layout>
