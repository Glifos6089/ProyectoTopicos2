@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="sidebar-title">{{__('order.list')}}</h6>
                </div>
                <div class="card-body">
                    <table class='table-hover table-bordered table-striped' style="width:100% ; border-spacing: 5px ">
                        <caption>{{__('order.list')}}</caption>
                        <tr>
                            <th>{{__('order.id')}}</th>
                            <th>{{__('order.adress')}}</th>
                            <th>{{__('order.price')}}</th>
                        </tr>
                        @foreach($data["orders"] as $order)
                        <tr>
                            <td><a href="{{route('order.id', ['id'=> $order->getId()])}}">{{$order->getId()}}</a></td>
                            <td>{{ $order->getAdress() }}</td>
                            <td>{{ $order->getTotalPrice() }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection