@extends('layouts.public')

<!-- Main Content -->
@section('content')



<div class="container">
        {!! Form::open(array('class' => 'form-password-reset')) !!}
        <!-- App Logo -->
            <img src="{{ URL::asset('img/login-logo.png') }}" class="login-logo">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Reset Password</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body">

                    <!-- Email input -->
                    <div class="form-group">
                        {{ Form::label('email', 'Email address') }}
                        {{ Form::text('email', Input::old('email'), array('placeholder' => 'Enter email', 'class' => 'form-control')) }}
                    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </div>
            </div><!-- /.box -->   
        {!! Form::close() !!}
    </div>
              
@endsection
