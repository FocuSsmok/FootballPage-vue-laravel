<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard/app.css') }}">
    <title>Document</title>
</head>
{{-- is-danger --}}

<body>
    {{--
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                        required autofocus> @if ($errors->has('e-mail'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('e-mail') }}</strong>
                                        </span> @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                        required> @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button> @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a> @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Zaloguj</h3>
                    <p class="subtitle has-text-grey">Zaloguj się aby przejść do panelu administratora</p>
                    <div class="box">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <input id="email" class="input is-large {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" placeholder="Your Email"
                                        autofocus="" value="{{ old('email') }}"> @if ($errors->has('email'))
                                    <p class="help is-danger" role="alert">
                                        {{ $errors->first('password') }}
                                    </p> @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Your Password"
                                        name="password" id="password "> @if ($errors->has('password'))
                                    <p class="help is-danger" role="alert">
                                        {{ $errors->first('password') }}
                                    </p> @endif
                                </div>
                            </div>
                            <div class="field ">
                                <label class="checkbox" for="remember ">
                                    <input type="checkbox" name="remember " id="remember " {{ old( 'remember') ? 'checked' : '' }}>
                                    Remember me
                                </label>
                            </div>
                            <button type="submit " class="button is-block is-info is-large is-fullwidth ">Login</button>
                        </form>
                    </div>
                    <p class="has-text-grey ">
                        @if (Route::has('password.request'))
                        <a class=" " href="{{ route( 'password.request') }} ">
                                    {{ __('Zapomniałeś hasła?') }}
                                </a> @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>