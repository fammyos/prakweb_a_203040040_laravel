@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            {{ session('loginError') }}
        </div>
        @endif
            <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-1">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" autofocus required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="form-floating">

                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>

    <small  class="d-block text-center mt-3">
        Not Registered? <a href="/register">Register Now!</a>
    </small>

        </main>
    </div>
</div>

@endsection