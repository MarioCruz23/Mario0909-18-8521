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
                <form action="{{ url ('/save2') }}" method="POST">
                    @csrf
                    <div class="card-header text-center">
                        Ingrese el lenguaje de programacion
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control col-md-9"placeholder="Describa">
                    </div>
                    <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>