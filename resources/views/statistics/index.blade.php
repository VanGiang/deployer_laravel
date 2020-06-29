@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Statistic list</div>

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
                          <th scope="col">@lang('Name')</th>
                          <th scope="col">@lang('Point')</th>
                          <th scope="col">@lang('Rate')</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($statistics as $statistic)
                            <tr>
                              <th scope="row">{{ $statistic->id }}</th>
                              <td>{{ $statistic->player->name }}</td>
                              <td class="point-col">{{ $statistic->point }}</td>
                              <td>
                                  <div class="rater-step" player_id="{{ $statistic->player->id }}" point-avg="{{ $statistic->point }}"></div>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>

                    @auth
                        <a href="{{ route('statistic.create') }}" class="btn btn-primary">@lang('Create statistic player')</a>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
