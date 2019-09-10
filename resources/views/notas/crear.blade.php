@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #616161; ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span style="font-size : 20px;">Agregar Nota</span>
                    <a href="/notas" class="btn btn-primary btn-sm">Regresar a Notas</a>
                </div>
                <div class="card-body" style="background-color: #9E9E9E;">     
                    <!-- Arroja mensaje de nota agregada  -->
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <!-- Formulario que usa el método Post y la acción es regresar a /notas -->
                  <form method="POST" action="/notas">
                    @csrf
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      style="background-color:rgba(0, 0, 0, 0.7); 
                      color:seashell;"
                    />
                    <input
                      type="text"
                      name="descripción"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                      style="background-color:rgba(0, 0, 0, 0.7);
                       color:seashell;"
                    />
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection