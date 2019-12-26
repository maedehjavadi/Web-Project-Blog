@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-info mt-4">
                <div class="card-header text-right bg-secondary text-light" style="font-family:B Mehr; font-weight:bold; font-size:18px;">{{ __('بازیابی رمزعبور') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control text-right border-info @error('email') is-invalid @enderror" placeholder="آدرس ایمیل" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="font-family:B Mehr; font-weight:bold;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary" style="font-family:B Mehr; font-weight:bold;">
                                    {{ __('ارسال لینک') }}
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
