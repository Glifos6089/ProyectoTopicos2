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
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{__('menu.portfolio')}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 btn"
                        href="{{ route('handbag.catalogue') }}">
                    </a>
                    <img class="img-fluid" src="{{ asset('/img/portfolio/handbag.png') }}" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 btn"
                        href="#">
                    </a>
                    <img class="img-fluid" src="" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 btn"
                        href="{{ route('accesory.catalogue') }}">
                    </a>
                    <img class="img-fluid" src="{{ asset('/img/portfolio/accesory.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{__('menu.api1')}}</h2>
        <img class="img-fluid" src="{{ asset('/img/portfolio/banner.png') }}" alt="" />
        <div class="card">
            <div class="card-header text-white bg-success"></div>
            <div class="card-body text-white bg-success">
                <div class="row">
                    @foreach($data["api"] as $product)
                    <div class="col-md-4">
                        <div class="card border-dark mb-3 text-dark">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{__('admin.price')}} {{ $product->price }}</li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class=" gap-2 mx-auto">
                <a href="http://babystoretopicosespeciales.tk/public/" class="btn btn-secondary btn-lg m-1" role="button"
                    aria-pressed="true">{{__('menu.api2')}}</a>
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