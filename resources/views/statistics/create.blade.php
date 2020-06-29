@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create statistic player') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elesif (session('error'))
                        <div class="alert alert-error" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('statistic.store') }}">
                        @csrf

                        <div class="form-group row">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">
                                        <input type="checkbox">
                                  </th>
                                  <th scope="col">Name</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($players as $player)
                                    <tr>
                                      <th scope="row">{{ $player->id }}</th>
                                      <td>
                                          <input type="checkbox" value="{{ $player->id }}" name="player_ids[]">
                                      </td>
                                      <td>{{ $player->name }}</td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
