@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-info mt-4">
                <div class="card-header text-right bg-primary text-light" style="font-family:B Mehr; font-weight:bold; font-size:18px;">ثبت نام</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <!--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>-->

                            <div class="col-md-8 ">
                                <input id="name" type="text" class="form-control text-right border-info @error('name') is-invalid @enderror" placeholder="نام" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="font-family:B Mehr; font-weight:bold;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-center">
                            <!--<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>-->

                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control text-right border-info @error('username') is-invalid @enderror" placeholder="نام کاربری" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus style="font-family:B Mehr; font-weight:bold;">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control text-right border-info @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" value="{{ old('email') }}" required autocomplete="email" style="font-family:B Mehr; font-weight:bold;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control text-right border-info @error('password') is-invalid @enderror" placeholder="کلمه عبور" name="password" required autocomplete="new-password" style="font-family:B Mehr; font-weight:bold;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center" >
                            <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control text-right border-info" placeholder="تکرار کلمه عبور" name="password_confirmation" required autocomplete="new-password" style="font-family:B Mehr; font-weight:bold;">
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-3 justify-content-center">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-outline-primary" style="font-family:B Mehr; font-weight:bold;" >
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
