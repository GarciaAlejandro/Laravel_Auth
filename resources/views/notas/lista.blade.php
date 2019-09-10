@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Notas para {{auth()->user()->name}}</span>
                    <a href="/notas/create" class="btn btn-primary btn-sm">Nueva Nota</a>
                </div>

                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notas as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripción }}</td>
                                <td>
                                    
                                    <a href="{{route('notas.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                                    
                                    <form action="{{route('notas.eliminar', $item)}}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger btn-sm" type="submit" >Eliminar </button>
                                       
                                    </form>  
                                             
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$notas->links()}}
                         @if ( session('mensaje') )
                             <div class="alert alert-success">{{ session('mensaje') }}</div>
                         @endif
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection