{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: imokhles--}}
{{--* Date: 20/10/2018--}}
{{--* Time: 13:24--}}
{{--*/--}}

<form class="" method="POST" action="{{ route('admin.account.info') }}">

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
        $field = 'name';
    @endphp

    <div class="form-group has-feedback">
        <input type="text" id="{{$field}}" name="{{$field}}" class="form-control" required value="{{ old($field) ? old($field) : $user[$field] }} " placeholder="@lang('admin_dashboard.name_plh')"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>


    @php
        $field = 'email';
    @endphp

    <div class="form-group has-feedback">
        <input type="email" id="{{$field}}" name="{{$field}}" class="form-control" required value="{{ old($field) ? old($field) : $user[$field] }} " placeholder="@lang('admin_dashboard.email_plh')"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">@lang('admin_dashboard.apply_change')</button>
        </div>
    </div>
</form>

