@extends('master')
@section('title')
    News
@endsection
@section('news')

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            News by {{ $news->user->name }}
          </h3>
          <h4 class="pb-3 mb-4 font-italic border-bottom">
            <ul>
              @if($news->teams)
              <li>Related to teams </li>
                <ul>
                  @foreach($news->teams as $team)
                     <li>{{ $team->name }}</li>
                  @endforeach
                </ul>
              @endif
            </ul>

          </h4>
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $news->title }}</h2>
            <p class="blog-post-meta">{{ $news->created_at }} by <a href="#">{{ $news->user->name }}</a></p>

            <p>{{ $news->content }}</p>
          </div><!-- /.blog-post -->
@endsection
