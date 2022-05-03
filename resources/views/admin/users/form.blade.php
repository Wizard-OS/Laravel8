<div class="row">
    <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="control-label">{{ 'Nombre' }}</label>
        <input class="form-control" name="name" type="text" id="name"
               value="{{ isset($user->name) ? $user->name : ''}}">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group col-md-4 {{ $errors->has('email') ? 'has-error' : ''}}">
        <label for="email" class="control-label">{{ 'Correo' }}</label>
        <input class="form-control" name="email" type="email" id="email"
               value="{{ isset($user->email) ? $user->email : ''}}">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group col-md-4 {{ $errors->has('password') ? 'has-error' : ''}}">
        <label for="password" class="control-label">{{ 'Contraseña' }}</label>
        <input class="form-control" name="password" type="password" id="password"
               value="{{ isset($user->password) ? $user->password : ''}}">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    @if($formMode === 'create')
        <button class="btn btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i> Crear
        </button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary"><i class="fa fa-ban"
                                                                                aria-hidden="true"></i> Cancelar</a>
    @else
        <button class="btn btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i> Actualizar</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary"><i class="fa fa-ban"
                                                                                aria-hidden="true"></i> Cancelar</a>
    @endif
</div>
