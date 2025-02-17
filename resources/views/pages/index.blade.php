@extends('layouts.default')

@section('menu-nav')
<div class="collapse navbar-collapse" id="menuburguer">
    <ul class="navbar-nav m-auto">
        <div class="d-md-flex d-sm-block d-block">
            <li class="nav-item">
                <a href="{{ route('welcome') }}" class="nav-link active-page">
                    <i class="icon-devices_other nav-icon"></i>
                    Inicio
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="worksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-card_travel nav-icon"></i>
                    Trabajos
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="worksDropdown">
                    <li>
                        <a href="{{route('job.index')}}" class="dropdown-item">Empleos</a>
                    </li>
                    <li>
                        <a href="{{route('service.index')}}" class="dropdown-item">Servicios</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link">
                    <i class="icon-wc nav-icon"></i>
                    Profesionales
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link">
                    <i class="icon-domain nav-icon"></i>
                    Emprendimientos
                </a>
            </li>
        </div>
        <div class="login">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link">
                    <i class="icon-login nav-icon"></i>
                    Iniciar Sesión
                </a>
            </li>
        </div>
    </ul>
</div>
@endsection
@section('content')
<div class="">
    <!-- Start -->
    <div class="row gutters d-md-flex d-sm-block d-block">
        <div class="col-md-4 col-sm-12 col-12 text-justify justify-content-center">
            <div class="card" id="main-container-card">
                <div class="card-header">
                    <div class="card-title">Trabajos</div>
                    <div class="card-sub-title">
                        En esta secciòn puedes ver los empleos que los usuarios solicitan y los servicios que se tienen a disposiciòn. <br> También puedes publicar avisos de trabajo que requieras o los servicios que ofrezcas.
                    </div>
                </div>
                <div class="card-body btm-bdr blue pb-0 flex-row justify-content-around align-content-start">
                    <a href="{{route('welcome')}}" class="btn btn-primary rounded" role="button">Empleos</a>
                    <a href="{{route('welcome')}}" class="btn btn-primary rounded" role="button">Servicios</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-12">
            <div class="card" id="main-container-card">
                <div class="card-header">
                    <div class="card-title">Profesionales</div>
                    <div class="card-sub-title">
                        <ol>
                            <li>
                                ¿Buscando nuevas oportunidades?
                            </li>
                            <li>
                                ¿Tiempo sin empleo?
                            </li>
                            <li>
                                ¿Recién Egresado?
                            </li>
                            <li>
                                ¿Cansado de no encontrar trabajo?
                            </li>
                            <li>
                                ¿No sabes que hacer?
                            </li>
                        </ol>
                        
                        Son preguntas frecuentes que nos hacemos al momento de buscar empleo de manera Profesional. <br> Por lo tanto la propuesta es que puedas dejar tu perfil Profesional y que otras personas que requieran los servicios que ofreces puedan contactarse contigo.
                    </div>
                </div>
                <div class="card-body btm-bdr blue pb-0">
                    <a href="{{route('welcome')}}" class="btn btn-primary rounded" role="button">Conocer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-12">
            <div class="card" id="main-container-card">
                <div class="card-header">
                    <div class="card-title">Emprendimientos</div>
                    <div class="card-sub-title">
                        Ser emprendedor no es nada sencillo y para poder progresar en el mercado es necesario ser conocido por el publico. <br> Por lo tanto en este lugar podrás hacer público tu emprendimiento y poco a poco ser reconocido.
                    </div>
                </div>
                <div class="card-body btm-bdr blue pb-0">
                    <a href="{{route('welcome')}}" class="btn btn-primary rounded" role="button">Publicar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection