{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: imokhles--}}
{{--* Date: 20/10/2018--}}
{{--* Time: 13:26--}}
{{--*/--}}
<form class="" method="POST" action="{{ route('admin.account.password') }}">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('success')}}
        </div>

    @endif

    @if ($errors->count())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    @php
        $field = 'old_password';
    @endphp

    <div class="form-group has-feedback">
        <input type="password" id="{{$field}}" name="{{$field}}" class="form-control" required placeholder="@lang('admin_dashboard.old_password_plh')"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>


    @php
        $field = 'new_password';
    @endphp

    <div class="form-group has-feedback">
        <input type="password" id="{{$field}}" name="{{$field}}" class="form-control" required placeholder="@lang('admin_dashboard.new_password_plh')"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>


    @php
        $field = 'confirm_password';
    @endphp

    <div class="form-group has-feedback">
        <input type="password" id="{{$field}}" name="{{$field}}" class="form-control" required placeholder="@lang('admin_dashboard.new_passwordConfirmation_plh')"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">@lang('admin_dashboard.apply_change')</button>
        </div>
    </div>
</form>
