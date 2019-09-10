@extends('layouts.app')

@section('content')
<div class="container" style="color:black;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">Dashboard 
                        <a href="/notas" class="btn btn-primary btn-sm">Ir a Notas</a>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
