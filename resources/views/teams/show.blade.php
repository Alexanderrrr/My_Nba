@extends('master')
@section('title')
  {{ $team->name }}
@endsection

@section('content')
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
      <h1>Nba Single Team : {{ $team->name }}</h1>
      <ul>
        <li>Email: {{ $team->email }}</li>
        <li>Address : {{ $team->adress }}</li>
        <li>City : {{ $team->city }}</li>
      </ul>
    </div>
  </div>
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
  @section('news')
  @foreach($team->news as $news)
    <div class="blog-post">
      <h2 class="blog-post-title">{{ $news->title }}</h2>
      <p class="blog-post-meta">{{ $news->created_at }} by <a href="#">{{ $news->user->name }}</a></p>

      <p>{{ $news->content }}</p>
    </div><!-- /.blog-post -->
  @endforeach
  @endsection
  <form class="form-signin" method="POST" action="/comment/{{ $team->id }}">

    {{ csrf_field() }}

    <h1 class="h3 mb-3 font-weight-normal">Type your comment</h1>

    <textarea name="comment" rows="8" cols="57"></textarea>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Publish Comment</button>
  </form>
</div>
@endsection
