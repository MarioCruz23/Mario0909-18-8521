@extends('layouts.base')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            @if(session('datosguardados'))
            <div class="alert-success">
                {{ session('datosguardados') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <form action="{{ url ('/save') }}" method="POST">
                    @csrf
                    <div class="card-header text-center">
                        Ingrese los datos de la criptomoneda
                    </div>
                    <div class="row form-group">
                        <label for="logotipo" class="col-2">Logotipo</label>
                        <input type="file" name="logotipo" id="">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Nombre</label>
                        <input type="text" name="nombre" class="form-control col-md-9" placeholder="Ingrese nombre">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Precio</label>
                        <input type="text" name="precio" class="form-control col-md-9"placeholder="Ingrese el precio">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Descripcion</label>
                        <input type="text" name="descripcion_" class="form-control col-md-9"placeholder="Describa">
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 offset-3">
                            <div class="form-group">
                                <label>Lenguaje</label>
                                <select name="lenguaje_id" class="form-control" >
                                    <option value="">--Seleccione--</option>
                                    @foreach( $lenguajeprogramacions as $lenguajeprogramacion)
                                        <option value="{{$lenguajeprogramacion->id}}"> {{$lenguajeprogramacion->id}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a class="btn btn-link" href="{{ url('/') }}">volver</a>
</div>