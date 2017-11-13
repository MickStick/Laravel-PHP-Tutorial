@extends('layouts.app')

@section('content')
<div class="container view-container grey lighten-5" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3>Login</h3>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-field {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div>
                            <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <label for="remember" class="black-text">
                                Remember Me
                            </label>
                            
                        </div>

                        <div class="input-field">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn green accent-3 left">
                                    Login
                                </button>

                                <a class="btn orange lighten-5 accent-1 right" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
</div><br><br>
@endsection
