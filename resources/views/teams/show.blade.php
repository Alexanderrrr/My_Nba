@extends('master')
@section('content')
  <h1>Nba Single Team : {{ $team->name }}</h1>
  <ul>
    <li>Email: {{ $team->email }}</li>
    <li>Address : {{ $team->adress }}</li>
    <li>City : {{ $team->city }}</li>
  </ul>
@endsection
@section('players_array')
<div class="col-md-6">
  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
      <strong class="d-inline-block mb-2 text-primary">Players of {{ $team->name }} team</strong>

      @foreach($team->players as $player)
      <h3 class="mb-0">
        <a class="text-dark" href="/players/{{$player->id}}">{{ $player->first_name }} {{ $player->last_name }}</a>
      </h3>
      <div class="mb-1 text-muted">Nov 12</div>
      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
      @endforeach
    </div>
  </div>
</div>
@endsection
