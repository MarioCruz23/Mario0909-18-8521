@extends('layouts.base')
<body style="background-color: #EABE3F;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Examen Final</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/form') }}">Criptomoneda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/form2') }}"> Lenguaje </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            @if(session('datoModificado'))
            <div class="alert-success">
                {{ session('datoModificado') }}
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
                <form action="{{ route('edit', $cripto->id) }}" method="POST">
                    @csrf @method('PATCH')
                    <div class="card-header text-center">
                        Modifique los datos de la criptomoneda
                    </div>
                    <div class="card-body">
                    <div class="row form-group">
                        <label for="logotipo" class="col-2">Logotipo</label>
                        <input type="file" name="logotipo" id="" value="{{ $cripto->logotipo}}">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Nombre</label>
                        <input type="text" name="nombre" class="form-control col-md-9" value="{{ $cripto->nombre}}">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Precio</label>
                        <input type="text" name="precio" class="form-control col-md-9" value="{{ $cripto->precio}}">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Descripción</label>
                        <input type="text" name="descripcion_" class="form-control col-md-9" value="{{ $cripto->descripcion_}}">
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 offset-3">
                            <div class="form-group">
                                <label>Lenguaje</label>
                                <select name="lenguaje_id" class="form-control" >
                                    <option value="{{ $cripto->lenguaje_id}}">--Seleccione--</option>
                                    @foreach( $lenguajeprogramacions as $lenguajeprogramacion)
                                        <option value="{{$lenguajeprogramacion->id}}"> {{$lenguajeprogramacion->descripcion}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2">Modificar</button>
                    </div>
            </div>
                </form>
            </div>
        </div>
    </div>
    <a class="btn btn-link" href="{{ url('/') }}">volver</a>
</div>
</body>