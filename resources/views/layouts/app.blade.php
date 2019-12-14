<!DOCTYPE html>
<html lang="en">
<head>
    <title>KANDANG QURBAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>

    <style>
        body {
        background-color: whitesmoke;
        background-size: cover;
        }
        .navbar{
            background-color:#f2921d;
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
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> KANDANG QURBAN </a>
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('scanner') }}"><span class="glyphicon glyphicon-qrcode"></span> QR </a></li>
                    <li><a href="{{ route('login')}}"><span class="glyphicon glyphicon-user"></span> MASUK </a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @yield('script')
</body>
</html>
