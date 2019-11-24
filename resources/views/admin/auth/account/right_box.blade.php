<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li><a href="#account_info" data-toggle="tab">@lang('admin_dashboard.account_info')</a></li>
        <li><a href="#change_password" data-toggle="tab">@lang('admin_dashboard.change_password')</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="account_info">
            @include('admin.auth.account.account_info_tab')
        </div>

        <div class="tab-pane" id="change_password">
            @include('admin.auth.account.change_password_tab')
        </div>
    </div>
</div>
