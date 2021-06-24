@extends('adminlte::page')

@section('title', 'CRUD con laravel 8')

@section('content_header')
    <h1>Lista de productos</h1>
@stop

@section('content')
<a href="productos/create" class="btn btn-primary mb-3">AGREGAR</a>
<table id="productos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-dark text-white">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Importa</th>
            <th>Exporta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $productos as $producto )
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->tipo }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->fecha }}</td>
            <td>{{ $producto->idpais }}</td>
            <td>{{ $producto->idpais2 }}</td>
            <td>
                <form action="{{ route ('productos.destroy',$producto->id)}}" method="POST">
                <a href="/productos/{{ $producto->id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#productos').DataTable({
            // crea una paginacion
            "lenghtMenu": [[5,10, 50, -1],[5, 10, 50, "ALL"]]
        });
    } );
    </script>
@stop