@extends('layouts.main')

@section('container')
    <main class="form-login w-100 m-auto">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    <form action="/login" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      <div class="form-floating">
        <input type="text" name="login" class="form-control @error ('login') is-invalid  @enderror" id="login" placeholder="Email or Username" autofocus required value="{{ old('login') }}">
        <label for="login">Email or Username</label>
        @error('login')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-3">
      Not Register? <a href="/register">register now !</a>
    </small>
  </main>
@endsection