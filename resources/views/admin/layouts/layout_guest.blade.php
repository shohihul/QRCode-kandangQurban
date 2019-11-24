<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Site-Head --}}
    @include('admin.layouts.inc.head')
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b> Kandang Qurban</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        @yield('content')
        @stack('content')
    </div>
</div>

@include('admin.layouts.inc.scripts')

</body>

</html>