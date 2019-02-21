@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
        <div class="column is-half">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Log in
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label for="email" class="label">E-Mail Address</label>
                            <div class="control">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}"
                                    name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <p class="help is-danger" role="alert">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <div class="control">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <p class="help is-danger" role="alert">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label for="remember" class="checkbox">
                                    <input type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">Login</button>
                            </div>
                            <div class="control">
                                <a class="button is-text" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
