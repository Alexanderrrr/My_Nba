@extends('master')
@section('title')
  {{ $player->first_name }} {{ $player->last_name }}
@endsection
@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
      <h1>Player: {{ $player->first_name }} {{ $player->last_name }}</h1>
      <ul>
        <li>{{ $player->email }}</li>
        <a class="text-light" href="/teams/{{ $player->team->id }}"><li>{{ $player->team->name }}</li></a>
      </ul>
    </div>
  </div>
@endsection
