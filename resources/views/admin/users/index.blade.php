@extends('admin.template.main')

@section('title', 'Listar Usuarios')

@section('title_body', 'Liistar Usuarios')

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
                        <a href="" class="btn btn-danger"></a>
                        <a href="" class="btn btn-warning"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $users->links() !!}
@endsection
