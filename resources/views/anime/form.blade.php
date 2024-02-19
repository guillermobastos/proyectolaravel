<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('categoria_id',$categorias, $anime->categoria_id, ['class' => 'form-control' . ($errors->has('anime_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Título') }}
            {{ Form::text('nombreAnime', $anime->nombreAnime, ['class' => 'form-control' . ($errors->has('nombreAnime') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nombreAnime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Duración') }}
            {{ Form::text('duracion', $anime->duracion, ['class' => 'form-control' . ($errors->has('duracion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('duracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('descripcion', $anime->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valoración') }}
            {{ Form::text('valoracion', $anime->valoracion, ['class' => 'form-control' . ($errors->has('valoracion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('valoracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
