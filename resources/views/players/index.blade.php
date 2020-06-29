@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Player list</div>

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
                          <th scope="col">
                                <input type="checkbox" value="" id="defaultCheck1">
                          </th>
                          <th scope="col">Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($players as $player)
                            <tr>
                              <th scope="row">{{ $player->id }}</th>
                              <td>
                                  <input type="checkbox" value="">
                              </td>
                              <td>{{ $player->name }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>

                    @auth
                        <a href="{{ route('player.create') }}" class="btn btn-primary">@lang('Create player')</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
