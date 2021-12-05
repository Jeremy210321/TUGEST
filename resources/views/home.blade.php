@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <strong>Gestiona tus portafolios</strong>
                                
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>Organiza tus proyectos mediante portafolios </strong><br> 
                                <p> Tendras la oportunidad de crear,editar y eliminar los proyectos según los desees</p>
                                <br>
                                <img src="https://images.unsplash.com/photo-1611224885990-ab7363d1f2a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=739&q=80" style="max-width:450px">
                                <br>
                                <br>
                                <a href="{{route('portafolio')}}" class="btn btn-dark" >GESTIONAR</a>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                             <strong>Gestiona tus Cursos</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                              <strong>Organiza los cursos ofertados </strong><br> 
                              <p> Tendras la oportunidad de crear,editar y eliminar los cursos según los desees</p>
                              <br>
                              <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="max-width:450px">
                              <br>
                              <br>
                                <a href="{{route('curso')}}" class="btn btn-dark" >GESTIONAR</a>
                             </div>
                          </div>
                        </div>
                    
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
