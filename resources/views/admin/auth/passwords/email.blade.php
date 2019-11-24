@extends('admin.layouts.layout_guest')


@section('content')
    <form method="POST" action="{{ route('admin.password.email') }}">

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

        <div class="text-center m-b-20">
            <p class="text-muted m-b-0">@lang('admin_dashboard.reset_instruction')</p>
        </div>

        <div class="form-group has-feedback">
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('admin_dashboard.email_plh')"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>


        <button class="btn btn-primary btn-block btn-flat" type="submit">@lang('admin_dashboard.send_password_reset_link')</button>


    </form>

    <a href="{{ route('admin.login') }}" class="text-center">@lang('admin_dashboard.have_account') <strong>@lang('admin_dashboard.sign_in')</strong></a>

@endsection