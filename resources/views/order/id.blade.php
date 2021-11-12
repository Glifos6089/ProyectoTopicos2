@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="sidebar-title">items list order {{$data["order"]->getId()}}</h6>
                </div>
                <div class="album py-5 bg-light">
                    <div class="container">
                        <h5>items:</h5>
                        <div class="row">
                            @foreach($data["order"]->items as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    @if(!is_null($item->handbag))
                                    <img class="img-fluid rounded mb-5"
                                        src="{{  URL::asset('storage/handbags/'.$item->handbag->getImage()) }}"
                                        alt="Card image cap"/>
                                    <div class="card-body">
                                        <h5 class="card-title">{{__('admin.name')}} {{ $item->handbag->getName() }}</h5>
                                        <p class="card-text">{{__('admin.price')}} {{ $item->handbag->getPrice() }}</p>
                                    </div>
                                    @endif
                                    @if(!is_null($item->accesory))
                                    <img class="img-fluid rounded mb-5"
                                        src="{{  URL::asset('storage/accesories/'.$item->accesory->getImage()) }}"
                                        alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-title">{{__('admin.name')}} {{ $item->accesory->getName() }}
                                        </h5>
                                        <p class="card-text">{{__('admin.price')}} {{ $item->accesory->getPrice() }}</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection