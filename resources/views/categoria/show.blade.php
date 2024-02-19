@extends('layouts.app')

@section('template_title')
    Categoria
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Enseña') }} Categoria</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre de la Categoria:</strong>
                            {{ $categoria->nombreCategoria }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> {{ __('Volver') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
