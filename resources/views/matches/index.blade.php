@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Match list</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-error" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">@lang('Home')</th>
                          <th scope="col">@lang('Time')</th>
                          <th scope="col">@lang('Guest')</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($matches as $match)
                            <tr>
                              <th scope="row">{{ $match->id }}</th>
                              <td>{{ $match->home }}</td>
                              <td>{{ $match->time }}</td>
                              <td>{{ $match->guest }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>

                    @auth
                        <a href="{{ route('matches.create') }}" class="btn btn-primary">@lang('Create match')</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
