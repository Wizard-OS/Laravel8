@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1>Crear Usuario</h1>
        </div>
        <div class="col-sm-6 pt-1">
            <div class="float-right">
                <a href="{{ route('admin.users.index') }}" title="Regresar">
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Regresar
                    </button>
                </a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ url('/admin/users') }}" accept-charset="UTF-8" class="form-horizontal"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                @include ('admin.users.form', ['formMode' => 'create'])
            </form>
        </div>
    </div>
@endsection
