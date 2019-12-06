<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">{{count($userNotifiactions)}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">@lang('admin_dashboard.notifications_counts_message', ['notifs' => count($userNotifiactions)])</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                @foreach ($userNotifiactions as $notification)
                    <li>
                        <a href="javascript:void(0);">
                            <i class="{{$notification['data']['icon_class']}} text-aqua"></i> {{$notification['data']['message']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</li>