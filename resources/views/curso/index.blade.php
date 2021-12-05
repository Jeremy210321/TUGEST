@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p><a href="{{route('home')}}" style="text-decoration: none">← Home </a></p>
        <div class="col-md-12">
            <div class="card">
                
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Gestión de Cursos
                    <a href="{{route('createCurso')}}" class="btn btn-primary btn-sm">Crear curso</a>
                </div>
                
            </div>
        </div>
    </div>
    <br>
    <div class="row flex">
        @forelse ($cursos as $curso)
        <div class="card col-md-5" style="width: 18rem; margin-left:10px">
            <img class="card-img-top" src="{{$curso->imagen}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><strong>{{$curso->titulo}}</strong></h5>
              <p class="card-text">{{$curso->descripcion}}</p>
              <a href="{{route('show',$curso ->id)}}" class="btn btn-primary btn-sm">Más información del curso</a>
            </div>
          </div>
        @empty
        <p>No existen registros</p>
        @endforelse
    </div>
    
</div>
@endsection
