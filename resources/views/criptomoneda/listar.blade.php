@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('datoEliminado'))
            <div class="alert alert-success">
                {{ session('datoEliminado') }}
            </div>
            @endif
            <table class="table table-success table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>Logotipo</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Lenguaje</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($relaciones as $relacion)
                    <tr>
                        <td>
                            <img src="{{ asset('storage').'/'.$relacion->logotipo}}" alt="{{ $relacion->logotipo}}" class="img-fluid" width="150px">
                        </td>
                        <td>{{ $relacion->nombre }}</td>
                        <td>{{ $relacion->precio }}</td>
                        <td>{{ $relacion->descripcion_ }}</td>
                        <td>{{ $relacion->lenguaje_id }}</td>
                        <td>
                            <a href="{{ route ('editform', $relacion->id) }}" class="btn btn-primary mb-1 ">
                            <i class="fas fa-pencil-alt "></i>
                            </a>
                            <form action="{{ route('delete', $relacion->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>   
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
            {{ $relaciones->links() }}
        </div>
    </div>
</div>