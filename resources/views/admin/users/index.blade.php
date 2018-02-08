@extends('admin.template.main')

@section('title', 'Listar Usuarios')

@section('title_body', 'Listar Usuarios')

@section('content')
    <a href="{{ route('users.create') }}" class="btn btn-info">
        Registrar Nuevo Usuario
    </a>
    <hr>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td>
                        @if ($user->type == 'admin')
                            <span class="badge badge-danger">
                                {{ $user->type }}
                            </span>
                        @else
                            <span class="badge badge-primary">
                                {{ $user->type }}
                            </span>
                        @endif
                    </td>
                    <td>
                        <a
                            href="{{ route('users.edit', $user->id) }}"
                            class="btn btn-warning">
                            <i class="icon-wrench"></i>
                        </a>
                        <a
                            onclick="return confirm('¿Seguro que desea eliminar al usuario {{$user->name}}?');"
                            href="{{ route('users.destroy', $user->id) }}"
                            class="btn btn-danger">
                            <i class="icon-delete-garbage-streamline"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $users->links() !!}
@endsection
