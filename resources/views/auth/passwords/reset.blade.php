@extends('layouts.public')

@section('content')
<div class="container"> 
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
        
        {!! Form::open(array('route' => 'password-post-reset', 'class' => 'form-password-reset')) !!}

            <input type="hidden" name="token" value="{{ $token }}">

            <!-- App Logo -->
            <img src="{{ URL::asset('img/login-logo.png') }}" class="login-logo img-responsive">

            @if ($errors->has('email'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            @if ($errors->has('password'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            @if ($errors->has('password_confirmation'))
                <span class="alert alert-danger">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif

            <div class="form-group">
                {{ Form::label('email', 'Email address') }}
                {{ Form::text('email', Input::old('email'), array('placeholder' => 'Enter email', 'class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('password_confirmation', 'Password') }}
                {{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password', 'class' => 'form-control')) }}
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
        {!! Form::close() !!}
        
        </div>
    </div>        
</div>
@endsection
