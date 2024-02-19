@extends('layouts.app')

@section('template_title')
    Anime
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Directorio de animes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('animes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir anime') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-info table-striped table-hover">
                            {{-- <table class="table-info table-striped table-hover"> --}}
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Categoría</th>
										<th>Anime</th>
										<th>Duración</th>
										<th>Descripción</th>
										<th>Valoración</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animes as $anime)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $anime->categoria->nombreCategoria }}</td>
											<td>{{ $anime->nombreAnime }}</td>
											<td>{{ $anime->duracion }}</td>
											<td>{{ $anime->descripcion }}</td>
											<td>{{ $anime->valoracion }}</td>

                                            <td>
                                                <form action="{{ route('animes.destroy',$anime->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('animes.show',$anime->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('animes.edit',$anime->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $animes->links() !!}
            </div>
        </div>
    </div>
@endsection
