@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div style="color:white">
                @if(session()->has('false'))
                    <div class="alertf ">
                        <span class="msg">{{session('false')}}</span>
                        <div class="close-btn">
                            <span class="fas fa-check"></span>
                        </div>
                    </div>
                @endif
            </div>

            <div class="aa-signin-area"  style="opacity: 0.5">
                <div class="aa-signin-form" style="border-radius: 10px; background: #4e555b;">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <div class="aa-signin-form-title">
                        <a class="aa-property-home">  <div  STYLE="color:darkred;size: 50px" >P<strong>7</strong >house <span STYLE="color: whitesmoke"></span></div></a>
                        <h4>Create your account and Stay with us</h4>
                    </div>

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="aa-single-field">
                            <label for="name" >{{ __('Name') }} :</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="aa-single-field hidden">
                            <label>  {{ __('usertype') }}  :</label>
                            <select id="usertype" class="form-control dropdown-item" name="usertype" value="{{ old('usertype') }}" required  autofocus>
                                <option class="dropdown-item">user</option>
                                <br><hr>
                                <option class="dropdown-item">admin</option>
                                <br><hr>
                                <option class="dropdown-item">office</option>
                                <br>

                            </select>
                        </div>

                        <div class="aa-single-field">
                            <label for="phone" >{{ __('Phone') }} :</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="aa-single-field">
                            <label for="image" >{{ __('Image') }} :</label>
                                <input  type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="aa-single-field">
                            <label for="Age">{{ __('Age') }} :</label>

                                <input  type="number" min="18" max="100" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required>

                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="aa-single-field">
                            <label for="siteUser">{{ __('Governorate') }} :</label>

                            <input  type="text"  class="form-control @error('siteUser') is-invalid @enderror" name="siteUser" value="{{ old('siteUser') }}" required>

                            @error('siteUser')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="aa-single-field">
                            <label for="Gender" >{{ __('Gender') }} :</label>
                                         <br>
                                <label>
                                    <input type="radio"  name="path" value="male" checked required>male
                                </label>
                                <label >
                                    <input type="radio" name="path" value="fmale" required>fmale
                                </label>

                        </div>

                        <div class="aa-single-field">
                            <label for="email">{{ __('E-Mail Address') }} :</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="aa-single-field">
                            <label for="password">{{ __('Password') }} :</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="aa-single-field">
                            <label for="password-confirm" >{{ __('Confirm Password') }} :</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>


                            <div class="aa-single-submit">
                                <button type="submit" class="btn btn-primary" style="border-radius: 4px;width: 200px;height: 50px">
                                    {{ __('create account') }}
                                </button>
                                <p style="color: black"> Have A Account? <a href="/login" style="color: blue">Sign in!</a></p>

                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
