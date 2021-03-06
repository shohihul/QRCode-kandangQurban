@extends('admin.layouts.layout_guest')

@section('before_styles')
    <link rel="stylesheet" href="{{ asset(config('admin_config.theme_name')) }}/css/separate/pages/login.min.css">
@endsection

@section('content')
    <form method="POST" action="{{ route('admin.password.update') }}">

        @if ($errors->count())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="text-center m-b-20">
            <p class="text-muted m-b-0">@lang('admin_dashboard.reset_password_instruction')</p>
        </div>

        <div class="form-group has-feedback">
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('admin_dashboard.email_plh')"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="password" id="password" name="password" class="form-control" placeholder="@lang('admin_dashboard.password_plh')"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="@lang('admin_dashboard.passwordConfirmation_plh')"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <button class="btn btn-primary btn-block btn-flat" type="submit">@lang('admin_dashboard.reset_password')</button>

    </form>

@endsection