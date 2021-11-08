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
                    <div class="card-body">
                    <div class="row form-group">
                        <label for="" class="col-2">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control col-md-9"placeholder="Describa">
                    </div>
                    <div class="row form-group mt-2">
                        <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>