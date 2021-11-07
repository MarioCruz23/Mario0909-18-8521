@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                    </tr>
                        @endforeach
                </tbody>
            </table>
            {{ $relaciones->links() }}
        </div>
    </div>
</div>