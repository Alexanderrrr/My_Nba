

  <div class=" justify-content-end align-items-center">
    @if(auth()->check())
        <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
        <a class="btn btn-sm btn-outline-secondary" href="/teams">Home</a>

    @else
        <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
        <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
    @endif
  </div>
