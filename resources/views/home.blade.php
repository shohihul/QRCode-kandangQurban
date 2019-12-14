@extends('layouts.app')

@section('content')
<div class="container"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height:500px;">
        <div class="item active">
            <img src="{{ asset('assets/img/3.jpg') }}" alt="" style="width:100%; " >
        </div>

        <div class="item">
            <img src="{{ asset('assets/img/6.jpg') }}" alt="" style="width:100%;">
        </div>
        
        <div class="item">
            <img src="{{ asset('assets/img/8.jpg') }}" alt="" style="width:100%;">
        </div>

        <div class="item">
            <img src="{{ asset('assets/img/2.jpg') }}" alt="" style="width:100%;">
        </div>

        <div class="item">
            <img src="{{ asset('assets/img/5.jpg') }}" alt="" style="width:100%;">
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
    </div><br>
</div>
@endsection