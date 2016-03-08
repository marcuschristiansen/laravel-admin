@extends('layouts.public')

<!-- Main Content -->
@section('content')
  	<div class="container">
  		{!! Form::open(array('route' => 'post-login', 'class' => 'form-login')) !!}
        <!-- App Logo -->
  			<img src="{{ URL::asset('img/login-logo.png') }}" class="login-logo">

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Login</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body">

                    @if(!$errors->isEmpty())
                      <div class="alert alert-danger">
                        <h4><i class="icon fa fa-ban"></i> Incorrect Credentials</h4>
                        Either your email address or password is incorrect. Please try again or contact the system administrator.
                      </div>
                    @endif

                    <!-- Email input -->
                    <div class="form-group">
                    {{ Form::label('email', 'Email address') }}
                    {{ Form::text('email', Input::old('email'), array('placeholder' => 'Enter email', 'class' => 'form-control')) }}
                    </div>

                    <!-- Password input -->
                    <div class="form-group">
                      {{ Form::label('password', 'Password') }}
                      {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
                    </div>

                    <!-- Remember user input -->
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember">Remember me
                      </label>
                    </div>

                    <!-- Forget password link -->
                    <a href="{{ URL::route('reset-get-email') }}">Forgot password?</a>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div><!-- /.box -->   
    	{!! Form::close() !!}
	</div>

@endsection
