@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Actualización de un curso
                    <a href="{{route('show',$curso)}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
                <div class="card-body">

                    <form   action="{{route('updateCurso',$curso)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">titulo</label>
                            <div class="col-sm-10">
                                <input type="text" name="titulo" class="form-control form-control-sm" id="colFormLabelSm" value="{{$curso->titulo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" >{{$curso->descripcion}}</textarea>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Imagen</label>
                            <div class="col-sm-10">
                                <input type="text" name="imagen" class="form-control form-control-sm" id="colFormLabelSm" value="{{$curso->imagen}}">
                            </div>
                        </div>
                      
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>


    @endsection