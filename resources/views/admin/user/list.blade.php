@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-x1-3">
            <div class="sidebar px-4 py-md-0">
                <h6 class="sidebar-title">{{__('admin.search')}}</h6>
                <form class="input-group" action="{{route('admin.user.search')}}" method="GET">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h6 class="sidebar-title">{{__('admin.list')}}</h6>
                </div>
                <div class="card-body">
                    <table class='table-hover table-bordered table-striped' style="width:100% ; border-spacing: 5px ">
                        <caption>{{__('admin.list')}}</caption>
                        <tr>
                            <th>{{__('admin.id')}}</th>
                            <th>{{__('admin.name')}}</th>
                            <th>{{__('admin.email')}}</th>
                            <th>{{__('admin.admin')}}</th>
                        </tr>
                        @foreach($data["users"] as $user)
                        <tr>
                            <td>{{ $user->getId() }}</td>
                            <td>{{ $user->getName() }}</td>
                            <td>{{ $user->getEmail() }}</td>
                            <td>{{ $user->getAdmin() }}</td>
                            <td>
                                <a href="edit/{{$user->getId()}}" class="btn btn-warning btn-sm" role="button"
                                    aria-pressed="true">{{__('admin.edi')}}</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.user.delete') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" name="id"
                                        value="{{ ($user->getId()) }}">{{__('admin.del')}}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="btn-group">
                <form method="GET" action="{{ route('admin.user.create') }}">
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