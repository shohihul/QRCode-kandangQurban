<!DOCTYPE html>
<html lang="en">
<head>
    <title>KANDANG QURBAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="{{ asset('css/landing-page.min.css')}}" rel="stylesheet">

    <style>
        body {
        background-color: whitesmoke;
        background-size: cover;
        }
        .navbar{
            background-color:#f2921d;
            margin:0;
        }
        .navbar a{
        text-decoration: none;
        color: aliceblue;
        }
        .profile {
            height: 300px;
            width: 300px;
        }
        .foto {
            border: 1px solid #ddd; /* Gray border */
            border-radius: 4px;  /* Rounded border */
            padding: 5px; /* Some padding */
            width: 100%; /* Set a small width */
        }
        .btn-white {
            background-color: white;
        }
        .page-link {
            color: #f2921d;
        }
        .page-item.active .page-link {
            color: #fff;
            background-color: #f2921d;
            border-color: #fff;
        }
        .history {
            padding :25px 25px
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"> KANDANG QURBAN </a>
            @guest
                <div class="navbar navbar-right">
                    <a href="{{ route('scanner') }}" class="btn"><i class="fas fa-qrcode"></i> Scan QR-Code </a>
                    <a href="{{ route('login')}}" class="btn"><i class="fas fa-user"></i> MASUK </a>
                    <a href="{{ route('admin.login')}}" class="btn"><i class="fas fa-user"></i> ADMIN </a>
                </div>  
            @else
                @if (Auth::guard('web')->check())
                    <div class="navbar navbar-right">
                        <a href="{{ route('scanner') }}" class="btn" role="button"><i class="fas fa-qrcode"></i> Scan QR-Code </a>
                        <a href="{{ route('cattleman.profile', Auth::user()->id) }}" class="btn"><i class="fas fa-user"></i> {{Auth::user()->name}} </a>
                        <a onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn btn-sm text-warning text-sm btn-white"><i class="fas fa-sign-out-alt"></i> | Logout </a>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('scanner') }}" class="btn"><i class="fas fa-qrcode"></i> Scan QR-Code </a>
                    <a href="{{ route('login')}}" class="btn"><i class="fas fa-user"></i> MASUK </a>
                    <a href="{{ route('admin.login')}}" class="btn"><i class="fas fa-user"></i> ADMIN </a>
                @endif
            @endguest
        </div>
    </nav>
    </nav>
    @yield('content')
    @yield('script')
</body>
</html>
