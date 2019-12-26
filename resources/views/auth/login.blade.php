@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-info mt-4">
                <div class="card-header text-right bg-primary text-light" style="font-family:B Mehr; font-weight:bold; font-size:18px;">{{ __('ورود') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <!--<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>-->

                            <div class="col-md-8">
                                <input id="username" type="username" class="form-control text-right border-info @error('username') is-invalid @enderror" placeholder="نام کاربری" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus style="font-family:B Mehr; font-weight:bold;">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control text-right border-info @error('password') is-invalid @enderror" placeholder="کلمه عبور" name="password" required autocomplete="current-password" style="font-family:B Mehr; font-weight:bold;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-end">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    
                                    <label class="form-check-label mr-4" for="remember" style="font-family:B Mehr; font-size:12px;">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-2 d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary mb-2" style="font-family:B Mehr; font-weight:bold;">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link mr-5" href="{{ route('password.request') }}" style="font-family:B Mehr; font-size:12px;" >
                                        {{ __('کلمه عبور خود را فراموش کرده ام؟') }}
                                    </a>
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
