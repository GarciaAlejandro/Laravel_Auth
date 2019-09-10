@extends('layouts.app')

@section('content')

        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                          
  <h3>Editar</h3>
  <a href="/notas" class="btn btn-primary btn-sm">Regresar a Notas</a>
            </div>
            <div class="card-body">

  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="{{ route('notas.update', $nota->id) }}" method="POST" >
    @method('PUT')
    @csrf

    @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
    @enderror

    @error('descripcion')
        <div class="alert alert-danger">
            La descripción es obligatoria
        </div>
    @enderror

    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $nota->nombre }}">
    <input type="text" name="descripcion" placeholder="Descripción de la Nota" class="form-control mb-2" 
    value="{{ $nota->descripcion }}">
    <button class="btn btn-warning btn-block" type="submit" >Editar</button>
  </form>

</div>

@endsection