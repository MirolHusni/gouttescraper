@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $site }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ url('malaysiakini/create') }}">Start Scraping</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
