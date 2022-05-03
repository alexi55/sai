@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Lista de usuarios') }}</div>

        <div class="card-body table-responsive">
            @can('user_create')
            <a href="{{ route('admin.users.create') }}" class="btn btn-outline-primary">Agregar Nuevo Usuario</a>
            @endcan

            <br /><br />



                <table class="table table-borderless table-hover">
                            <tr class="bg-info text-light">
                                <th class="text-center">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                    @forelse ($users as $user)
                        <tr>
                            <td >{{$user->idu}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->title}}</td>
                            <td>
                                 
                                    @can('user_edit')
                                        <a href="users/{{$user->idu}}/edit" class="btn btn-sm btn-outline-warning">Editar</a>
                                        @endcan
                                    @can('user_delete')
                                <form action="{{ route('admin.users.destroy', $user->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Esta Ud. seguro..?')" class="btn btn-sm btn-outline-danger">Borrar</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
                            </tr>
                    @endforelse
                </table>




            @if($users->total() > $users->perPage())
            <br><br>
            {{$users->links()}}
            @endif

        </div>
    </div>

@endsection
