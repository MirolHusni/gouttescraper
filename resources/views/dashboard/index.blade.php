@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <label>Site Available</label><br>
                    <a class="btn btn-primary" href="{{ url('malaysiakini') }}">Malaysiakini</a>
                </div>

                <div class="card-body">
                    <label>All Site</label><br>
                    <a class="btn btn-success" href="{{ url('crawl') }}">Crawl All Sites</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
