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
                    <td>{{ $articulo->categoria->denominacion}}</td>
                    <td>{{ $articulo->precio }}</td>
                    <td><a href="articulo/carrito/{{$articulo->id}}">Añadir</a></td>
                </tr>
            @endforeach


        </tbody>
    </table>

@if ($carrito)

@foreach ($carrito as $articulo)
{{$articulo}}
@endforeach


@endif


</x-guest-layout>
