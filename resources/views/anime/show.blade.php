@extends('layouts.app')

@section('template_title')
    Anime
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-primary mb-3" style="max-width: 140rem;">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"> {{ $anime->nombreAnime }}</span>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Categoría Anime:</strong>
                            {{ $anime->categoria->nombreCategoria }}
                        </div>

                        <div class="form-group">
                            <strong>Duración:</strong>
                            {{ $anime->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $anime->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Valoración:</strong>
                            {{ $anime->valoracion }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('animes.index') }}"> {{ __('Volver') }}</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
