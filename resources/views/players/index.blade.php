@extends('master')
@section('content')
  <h1>Player: {{ $player->first_name }} {{ $player->last_name }}</h1>
  <ul>
    <li>{{ $player->email }}</li>
    <a class="text-light" href="/teams/{{ $player->team->id }}"><li>{{ $player->team->name }}</li></a>
  </ul>
@endsection
