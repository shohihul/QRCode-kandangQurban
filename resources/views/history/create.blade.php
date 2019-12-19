@extends('layouts.app')

@section('content')
<header class="masthead text-white text-center" style="background-image: url({{ asset('assets/img/livestock/' . $livestock->image) }});">
    <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="mb-1">{{ $livestock->name }}</h1>
                <h4 class="mb-5">{{ $livestock->cattleman->name}}</h4>
            </div>
        </div>
</header>
<br>
<div class="container">
    <div class="card">
        <div class="card-body login-card-body">
            <h2 class="text-center">Tambah Riwayat Hewan Ternak</h2>
            <form method="POST" action="">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                        Remember Me
                        </label>
                    </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-warning btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection