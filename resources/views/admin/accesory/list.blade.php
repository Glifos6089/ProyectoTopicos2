@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-x1-3">
            <div class="sidebar px-4 py-md-0">
                <h6 class="sidebar-title">{{__('admin.search')}}</h6>
                <form class="input-group" action="{{route('admin.handbag.search')}}" method="GET">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="sidebar-title">{{__('admin.lisa')}}</h6>
                </div>
                <div class="card-body">
                    <table class='table-hover table-bordered table-striped' style="width:100% ; border-spacing: 5px ">
                        <caption>{{__('admin.lisa')}}</caption>
                        <tr>
                            <th>{{__('admin.name')}}</th>
                            <th>{{__('admin.price')}}</th>
                        </tr>
                        @foreach($data["Accesory"] as $accesory)
                        <tr>
                            <td>{{ $accesory->getName() }}</td>
                            <td>{{ $accesory->getPrice() }}</td>
                            <td>
                                <a href="{{ route('admin.accesory.edit', ['id'=> $accesory->getId()]) }}"
                                    class="btn btn-warning btn-sm" role="button"
                                    aria-pressed="true">{{__('admin.ed')}}</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.accesory.delete') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" name="id"
                                        value="{{ ($accesory->getId()) }}">{{__('admin.del')}}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="btn-group">
                <form method="GET" action="{{ route('admin.accesory.create') }}">
                    <button type="submit" class="btn btn-warning btn-lg">{{__('admin.user')}}</button>
                </form>
                <a href="{{ URL::route('admin.home.index') }}">
                    <button class="btn btn-danger btn-lg" type="button">{{__('admin.home')}}</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection