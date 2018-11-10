@extends('master')
@section('title')
    Login
@endsection
@section('content')

  <div class="jumbotron p-3 p-md-3 text-black rounded bg-light">

    <div class="col-md-3 px-2">
      <form class="form-signin" method="POST" action="/login">

        {{ csrf_field() }}


        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address">
        @include('partials.error_messagge', ['field' => 'email']) <!-- gadjamo name od inputa -->

        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        @include('partials.error_messagge', ['field' => 'password']) <!-- gadjamo name od inputa -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      </form>
    </div>
  </div>
  @if(count($errors->all()))
      @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}

        </div>
      @endforeach
  @endif
@endsection
