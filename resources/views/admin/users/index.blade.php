@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2 px-2">
        <div class="col-sm-4">
            <h1>Listado de Usuarios</h1>
        </div>
        <div class="col-sm-4 pt-1">
            <form method="GET" action="{{ url('/admin/users') }}" accept-charset="UTF-8"
                  class="form-inline my-2 my-lg-0" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Buscar..."
                           value="{{ request('search') }}">
                    <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                </div>
            </form>
        </div>
        <div class="col-sm-4 pt-1">
            <div class="float-right">
                <a href="{{ url('/admin/users/create') }}" class="btn btn-success btn-sm" title="Agregar usuario">
                    <i class="fa fa-plus" aria-hidden="true"></i> Agregar usuario
                </a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ url('/admin/users/' . $user->id) }}" title="View user">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                           aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('/admin/users/' . $user->id . '/edit') }}"
                                   title="Edit user">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/admin/users' . '/' . $user->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete user"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div
                    class="pagination-wrapper"> {!! $users->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
    </div>
@stop
