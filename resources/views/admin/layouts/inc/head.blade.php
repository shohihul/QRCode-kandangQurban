<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Kandang Qurban</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

@yield('before_styles')
@stack('before_styles')

<link rel="stylesheet" href="{{ asset(config('admin_config.theme_name')) }}/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{ asset(config('admin_config.theme_name')) }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset(config('admin_config.theme_name')) }}/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset(config('admin_config.theme_name')) }}/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset(config('admin_config.theme_name')) }}/dist/css/adminlte.min.css">

@yield('after_styles')
@stack('after_styles')