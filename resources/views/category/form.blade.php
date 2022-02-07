<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('album_id') }}
            {{ Form::text('album_id', $category->album_id, ['class' => 'form-control' . ($errors->has('album_id') ? ' is-invalid' : ''), 'placeholder' => 'Album Id']) }}
            {!! $errors->first('album_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categorias') }}
            {{ Form::text('categorias', $category->categorias, ['class' => 'form-control' . ($errors->has('categorias') ? ' is-invalid' : ''), 'placeholder' => 'Categorias']) }}
            {!! $errors->first('categorias', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capa') }}
            {{ Form::text('capa', $category->capa, ['class' => 'form-control' . ($errors->has('capa') ? ' is-invalid' : ''), 'placeholder' => 'Capa']) }}
            {!! $errors->first('capa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('formatos') }}
            {{ Form::text('formatos', $category->formatos, ['class' => 'form-control' . ($errors->has('formatos') ? ' is-invalid' : ''), 'placeholder' => 'Formatos']) }}
            {!! $errors->first('formatos', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>