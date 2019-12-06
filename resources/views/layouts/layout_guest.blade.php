<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Site-Head --}}
    @include('layouts.inc.head')
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        Kandang Qurban</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        @yield('content')
        @stack('content')
    </div>
</div>

@include('layouts.inc.scripts')

</body>

</html>