@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    {!! __('strings.backend.welcome') !!}
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
