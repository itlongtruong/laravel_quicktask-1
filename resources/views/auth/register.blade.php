@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.register')</div>
                @include('common.errors')
                <div class="card-body">
                    {!! Form::open(['route' => 'register', 'aria-label' => trans('messages.register')]) !!}

                        <div class="form-group row">
                            {!! Form::label('name', trans('messages.name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), ['class' => ['form-control', $errors->has('name') ? ' is-invalid' : ''], 'required' => 'required', 'id' => 'name', 'autofocus' => 'autofocus']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', trans('messages.email'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'required' => 'required', 'id' => 'email', 'autofocus' => 'autofocus']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('messages.password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'required' => 'required', 'id' => 'password']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('messages.confirm_password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'id' => 'password-confirm']) !!}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('messages.register'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
