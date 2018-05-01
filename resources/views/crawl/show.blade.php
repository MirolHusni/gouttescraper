@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $site }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ url('malaysiakini/create') }}">Re-Scrap</a>
                    <br>
                    <br>
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Link</th>
                        <th>Published Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($reports as $key => $report)
                      <tr>
                        <td>{{ ++$key }}</td>
                        <td><a href="{{ $report->url }}" target="_blank">{{ $report->title }}</a></td>
                        <td>{{ str_limit($report->content, $limit = 100, $end = '...') }}</td>
                        <td>{{ $report->url }}</td>
                        <td>{{ $report->date_published }}</td>
                      </tr>
                    @empty
                    <tr>No data.</tr>
                    @endforelse
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
