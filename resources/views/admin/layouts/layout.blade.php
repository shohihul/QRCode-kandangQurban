<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Site-Head --}}
    @include('admin.layouts.inc.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    {{-- Navigation Bar --}}
    @include('admin.layouts.main_header.main_header')

    {{-- SideMenu --}}
    @include('admin.layouts.sidemenu.list')

    <!-- Main content -->
    <section class="content">
        @yield('content')
        @stack('content')
    </section>
</div>

@include('admin.layouts.inc.scripts')

</body>

</html>