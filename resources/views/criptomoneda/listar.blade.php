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
        <div class="col-md-10">
            @if(session('datoEliminado'))
            <div class="alert alert-success">
                {{ session('datoEliminado') }}
            </div>
            @endif
            <table class="table table-secondary table-striped table-hover text-center">
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
                        <td>{{ $relacion->lenguajeprogramacion->descripcion}}</td>
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
</body>