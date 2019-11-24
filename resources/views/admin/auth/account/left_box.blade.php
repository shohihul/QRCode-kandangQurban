<!-- Profile Image -->
<div class="box box-primary">
    <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{ asset(config('admin_config.theme_name')) }}/dist/img/user4-128x128.jpg" alt="User profile picture">

        <h3 class="profile-username text-center">{{auth('admin')->user()->name}}</h3>
        <p class="text-muted text-center">{{auth('admin')->user()->email}}</p>

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
