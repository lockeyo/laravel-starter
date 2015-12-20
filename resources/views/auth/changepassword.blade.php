<!-- Template -->
@extends('templates.default')

<!-- Name of the page -->
@section('title') Change password @endsection

<!-- Meta-Tags for the page -->
@section('meta')

@endsection

<!-- Content -->
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Change password</h1>
        </div>
        {!! Form::open(array('url' => URL::to('auth/changepassword'), 'method' => 'post', 'files'=> true)) !!}
        <fieldset>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('quantity', trans('site/user.password'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {!! Form::label('quantity', trans('site/user.password_confirmation'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                </div>
            </div>
            <div class="form-actions form-group">
                <button type="submit" class="btn btn-primary">{!!
				trans('site/user.submit') !!}</button>
            </div>
        </fieldset>
        {!! Form::close() !!}
    </div>
@endsection
