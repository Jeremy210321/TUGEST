@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p><a href="{{route('home')}}" style="text-decoration: none">← Home </a></p>
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Gestión de Portafolios
                    <a href="{{route('create')}}" class="btn btn-primary btn-sm">Crear portafolio</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    @forelse ($portafolios as $portafolio)
    <h5 class="card-title">Nombre: {{ $portafolio->nombre }}</h5>
    <h5 class="card-title">Descripción: {{ $portafolio->descripcion }}</h5>
    <h5 class="card-title">Categoría: {{ $portafolio->categoria }}</h5>
    <h5>Imagen: <br><img src="{{ $portafolio->imagen }}" alt="portafolio-imagen" style="max-width:250px" /></h5> 
    <h5 class="card-title">Vídeo: {{ $portafolio->url }}</h5>
    {{-- <a href="{{route('show',$portafolio ->id)}}" class="btn btn-primary btn-sm">Más información</a> --}}
    <a href="{{route('showPortafolio',$portafolio ->id)}}" class="btn btn-primary btn-sm">Más información</a>
    <hr>
    @empty
    <p>No Existen proyectos</p>
    @endforelse

    @endsection