@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
        <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="form-floating">
                <label for="name">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror " id="username" placeholder="Username" required value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="form-floating">
                <label for="email">Email Adress</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror    
                </div>
                <div class="form-floating mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror " id="password" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror    
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
            </form>

    <small  class="d-block text-center mt-3">
        Already Registered? <a href="/login">Login</a>
    </small>

        </main>
    </div>
</div>

@endsection