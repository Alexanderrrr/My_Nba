@extends('master')
@section('title')
  Home Page
@endsection

@section('teams')
<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-between">
    @foreach($teams as $team)

    <a class="p-2 text-muted" href="/teams/{{ $team->id }}">{{ $team->name }}</a>
    @endforeach
  </nav>
</div>
@endsection
