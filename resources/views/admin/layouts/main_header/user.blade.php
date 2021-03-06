<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset(config('admin_config.theme_name')) }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
        <span class="hidden-xs">{{auth('admin')->user()->name}}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ asset(config('admin_config.theme_name')) }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
                {{auth('admin')->user()->name}}
                <small>@lang('admin_dashboard.member_since') {{auth('admin')->user()->created_at->format('M. Y') }}</small>
            </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="{{route('admin.account.info')}}" class="btn btn-default btn-flat">@lang('admin_dashboard.profile')</a>
            </div>
            <div class="pull-right">
                <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat">@lang('admin_dashboard.logout')</a>
            </div>
        </li>
    </ul>
</li>

<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <img src="{{ asset(config('admin_config.theme_name')) }}/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
        <a href="{{route('admin.account.info')}}" class="dropdown-item notify-item">
            <i class="fi-head"></i> <span>@lang('admin_dashboard.profile')</span>
        </a>
        <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
            <i class="fi-head"></i> <span>@lang('admin_dashboard.logout')</span>
        </a>
    </div>
</li>