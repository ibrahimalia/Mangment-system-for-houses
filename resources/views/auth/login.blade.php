@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="aa-signin-area" style="opacity: 0.4">
                <div class="aa-signin-form" style="border-radius: 10px; background: #4e555b;">
                    <div class="aa-signin-form-title">
                        <a class="aa-property-home" STYLE="color:darkred;size: 50px" >P7House</a>
                        <h4>Sign in to your account</h4>
                    </div>



                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="aa-single-field">
                            <label for="email">{{ __('E-Mail Address') }} :</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="aa-single-field">
                            <label for="password">{{ __('Password') }} :</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="aa-single-field">

                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" style="margin-left: 20px">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Sign in') }}
                                </button>
                                <button type="submit" class="btn btn-danger" style="border-radius: 50px" title="Google">
                                    <i class="fa fa-google" style="font-size: 8px"></i>
                                </button>
                                <button type="submit" class="btn btn-success" style="border-radius: 50px" title=GitHup" >
                                    <i class="fa fa-github" style="font-size: 8px" ></i>
                                </button>
                                <button type="submit" class="btn btn-default"  style="border-radius: 17px" title="FaceBook">
                                    <i class="fa fa-facebook" style="font-size: 8px"></i>
                                </button>
                                @if (Route::has('password.request'))
                                    <br>
                                    <a  style="color: black" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <p style="color: black">Don't Have A Account Yet? <a href="/register" style="color: blue">Sign up!</a></p>

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
