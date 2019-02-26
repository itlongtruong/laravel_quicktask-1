@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.verify_email')</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('messages.verify_link')
                        </div>
                    @endif

                    @lang('messages.before_proceeding')
                    @lang('receive_email'), <a href="{{ route('verification.resend') }}">@lang('messages.click_here')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
