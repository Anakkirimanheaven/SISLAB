@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 bg-dark text-white">
                <div class="card-header text-white text-center">{{ __('Log In') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control bg-dark text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control bg-dark text-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="mt-3 text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div>
                            <p class="mb-0">Belum Punya Akun?<a class="btn btn-link" href="http://127.0.0.1:8000/register" class="text-white-50 fw-bold">Buat Akun Disini</a>
                            </p>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body {
        background: #121212;
        color: #ffffff;
        font-family: 'Roboto', sans-serif;
    }
    .card {
        border-radius: 1rem;
        background: #1f1f1f;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-radius: 1rem 1rem 0 0;
        font-size: 1.5rem;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
    }
    .form-control {
        border-radius: .5rem;
        background: #2e2e2e;
        color: #ffffff;
        border: none;
        transition: all 0.3s;
    }
    .form-control:focus {
        background: #3e3e3e;
        color: #ffffff;
        border: 1px solid #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }
    .invalid-feedback {
        color: #ff6b6b;
    }
    .btn-primary {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border: none;
        border-radius: .5rem;
        font-size: 1.2rem;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        transition: all 0.3s;
    }
    .btn-primary:hover {
        background: #2a5298;
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.5);
    }
</style>
