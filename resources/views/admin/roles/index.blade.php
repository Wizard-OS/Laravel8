@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2 px-2">
        <div class="col-sm-4">
            <h1>Listado de Roles</h1>
        </div>
        <div class="col-sm-4 pt-1">
            <form method="GET" action="{{ url('/admin/roles') }}" accept-charset="UTF-8"
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
                <a href="{{ url('/admin/roles/create') }}" class="btn btn-success btn-sm" title="Agregar rol">
                    <i class="fa fa-plus" aria-hidden="true"></i> Agregar rol
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
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>
                                <a href="{{ url('/admin/roles/' . $item->id) }}" title="View Role">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                           aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('/admin/roles/' . $item->id . '/edit') }}" title="Edit Role">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/admin/roles' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Role"
                                            onclick="return confirm(&quot;Está seguro que desea eliminar el registro?&quot;)">
                                        <i
                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div
                    class="pagination-wrapper"> {!! $roles->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
    </div>
@stop
