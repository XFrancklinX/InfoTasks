@extends('layouts.default')

@section('menu-nav')
<div class="collapse navbar-collapse" id="menuburguer">
    <ul class="navbar-nav m-auto">
        <div class="d-md-flex d-sm-block d-block">
            <li class="nav-item">
                <a href="{{ route('welcome') }}" class="nav-link">
                    <i class="icon-devices_other nav-icon"></i>
                    Inicio
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link active-page dropdown-toggle" id="worksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
@endsection