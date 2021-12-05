@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-body d-flex justify-content-between align-items-center">
                    Creación de Curso
                    <a href="{{route('curso')}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
                <div class="card-body">
                    <form action="{{route('storeCurso')}}" method="POST">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong>Titulo:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="titulo" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong>Descripción:</strong></label>
                            <div class="col-sm-10">
                                <textarea type="form-control" name="descripcion" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong>Imagen:</strong></label>
                            <div class="col-sm-10">
                                <input type="text" name="imagen" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                       
                    </form>
                  
                
                </div>

            </div>
        </div>
    </div>
</div>
<br>


@endsection