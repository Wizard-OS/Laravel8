<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($role->title) ? $role->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($role->content) ? $role->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    @if($formMode === 'create')
        <button class="btn btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i> Crear
        </button>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary"><i class="fa fa-ban"
                                                                                aria-hidden="true"></i> Cancelar</a>
    @else
        <button class="btn btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i> Actualizar</button>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary"><i class="fa fa-ban"
                                                                                aria-hidden="true"></i> Cancelar</a>
    @endif
</div>
