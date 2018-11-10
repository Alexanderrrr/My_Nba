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
@section('comments')
<div class="card flex-md-row mb-4 shadow-sm h-md-250">
  <div class="card-body d-flex flex-column align-items-start">
      <strong class="d-inline-block mb-2 text-success">All Comments</strong>

      @foreach($comments as $comment)
      <div class="mb-1 text-muted">created at {{ $comment->created_at }}</div>
      <p class="card-text mb-auto">{{ $comment->content }}</p>
      @endforeach
      {{ $comments->links() }}
    </div>
  </div>
@endsection
