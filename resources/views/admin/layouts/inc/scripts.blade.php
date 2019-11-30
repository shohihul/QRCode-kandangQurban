@yield('before_scripts')
@stack('before_scripts')

<!-- jQuery -->
<script src="{{ asset(config('admin_config.theme_name')) }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset(config('admin_config.theme_name')) }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset(config('admin_config.theme_name')) }}/dist/js/adminlte.min.js"></script>

@yield('script')
<script type="text/javascript">
    function get_regencie(){
        $.ajax({
            url: "{{ route('admin.regencie.get_by_province') }}?province_id=" + $(this).val(),
            method: 'GET',
            success: function(data) {
                $('#regencie').html(data.html);
            }
        });
    };
</script>

@yield('after_scripts')
@stack('after_scripts')