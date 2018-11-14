@extends('master')
@section('title')
    News
@endsection
@section('news')

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            All newes
          </h3>
          <div class="blog-post">
            @foreach($news as $new)

            <a href="/news/{{ $new->id }}" ><h2 class="blog-post-title">{{ $new->title }}</h2></a>
            <p class="blog-post-meta">{{ $new->created_at }} by <a href="#">{{ $new->user->name }}</a></p>

            <p>{{ $new->content }}</p>
            @endforeach
            <nav class="blog-pagination">
              <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled': 'primary' }}" href="{{ $news->previousPageUrl() }}">Older</a>
              <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled' }}" href="{{ $news->nextPageUrl() }}">Newer</a>
            Page  {{  $news->currentPage() }} of {{ $news->lastPage() }}
            </nav>
          </div><!-- /.blog-post -->
@endsection
