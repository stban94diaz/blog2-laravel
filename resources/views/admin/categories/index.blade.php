@extends('admin.template.main')

@section('title', 'Listar Categorias')

@section('title_body', 'Listar Categorias')

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-info">
        Registrar Nueva Categoria
    </a>
    <hr>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td> {{ $category->id }} </td>
                    <td> {{ $category->name }} </td>
                    <td>
                        <a
                            href="{{ route('categories.edit', $category->id) }}"
                            class="btn btn-warning">
                            <i class="icon-wrench"></i>
                        </a>
                        <a
                            onclick="return confirm('¿Seguro que desea eliminar la categoria {{$category->name}}?');"
                            href="{{ route('categories.destroy', $category->id) }}"
                            class="btn btn-danger">
                            <i class="icon-delete-garbage-streamline"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $categories->links() !!}
@endsection
