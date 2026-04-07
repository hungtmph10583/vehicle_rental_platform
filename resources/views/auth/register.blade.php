<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('theme/frontend/access/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/access/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/frontend/access/css/prism-okaidia.css') }}">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="container-sm mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">@include('layouts.frontend.alert')</div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card border-dark">
                    <div class="card-header text-center">
                        <span>Sign Up</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name input -->
                            <div class="form-outline my-4">
                                <label class="form-label" for="name">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter name" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email input -->
                            <div class="form-outline my-4">
                                <label class="form-label" for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter password" autocomplete="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="confirmed">{{ __('Confirm Password') }}</label>
                                <input id="confirmed" type="password" class="form-control @error('confirmed') is-invalid @enderror" name="confirmed" required placeholder="Enter confirm password" autocomplete="confirmed">
                                @error('confirmed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-secondary w-100 mb-2">{{ __('Submit') }}</button>
                            <!-- Register buttons -->
                            <div class="text-center m-4">
                                <p>Have account! <a href="{{ route('login') }}">{{ __('Sign in') }}</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>