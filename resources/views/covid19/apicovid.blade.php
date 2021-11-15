@extends('layouts.app')
@section('content')
<!-- Portfolio Section-->
@if(session()->get('data') != '')
<div class="alert alert-danger " role="alert-block">
    <h4 class="alert-heading text-center">ERROR!</h4>
    <h4 class="alert-heading text-center">{{ session()->get('data') }}</h4>
</div>
@endif
<section class="page-section portfolio" id="portfolio">
    <div class="album py-5 bg-light">
        <div class="container">
            <h1>COVID-19 INFORMACIÓN DIARIA ACTUALIZADA</h1>
            <h3>Fecha:  {{$data->day}} </h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Detalles lugar</h5>
                            <h6 class="card-text">Continente: {{$data->continent}}</h6>
                            <h6 class="card-text">Pais: {{$data->country}}</h6>
                            <h6 class="card-text">Población: {{$data->population}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Casos</h5>
                            <h6 class="card-text">Nuevos: {{$data->cases->new}}</h6>
                            <h6 class="card-text">Activos: {{$data->cases->active}}</h6>
                            <h6 class="card-text">Criticos: {{$data->cases->critical}}</h6>
                            <h6 class="card-text">Recuperados: {{$data->cases->recovered}}</h6>
                            <h6 class="card-text">Total: {{$data->cases->total}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Muertes</h5>
                            <h6 class="card-text">Nuevos: {{$data->deaths->new}}</h6>
                            <h6 class="card-text">Total: {{$data->deaths->total}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about" style='background-color: #F36D51'>
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{__('menu.about')}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">{{__('menu.description1')}}</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">{{__('menu.description2')}}</p>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 btn"
                            href="{{ route('accesory.catalogue') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection