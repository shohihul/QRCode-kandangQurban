@extends('admin.layouts.layout_guest')

@section('content')
    <form method="POST" action="{{ route('admin.register') }}">

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


        <div class="form-group has-feedback">
            <input type="text" id="name" name="name" class="form-control" placeholder="@lang('admin_dashboard.name_plh')"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
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

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> @lang('admin_dashboard.i_accept') <a href="#">@lang('admin_dashboard.conditions_btn')</a>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('admin_dashboard.sign_up')</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <a href="{{ route('admin.login') }}" class="text-center">@lang('admin_dashboard.have_account') <strong>@lang('admin_dashboard.sign_in')</strong></a>


@endsection