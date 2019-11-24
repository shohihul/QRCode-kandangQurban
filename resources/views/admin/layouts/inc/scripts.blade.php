@yield('before_scripts')
@stack('before_scripts')

<!-- jQuery -->
<script src="{{ asset(config('admin_config.theme_name')) }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset(config('admin_config.theme_name')) }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset(config('admin_config.theme_name')) }}/dist/js/adminlte.min.js"></script>

@include('admin.layouts.inc.alerts')

@yield('after_scripts')
@stack('after_scripts')