@extends('layouts.master')
@section('content')
<ol class="breadcrumb bg-white" id="contain">
    <li class="breadcrumb-item">HOME</li>
</ol>
<div class="container custom-product">
    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/banner1.jpg" alt="cloth1" width="1200px" height="500px">
            <div class="carousel-caption">
                <h3 id="contain3">Style is a way to say who you are without having to speak</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/banner2.jpg" alt="cloth2" width="1200px" height="500px">
            <div class="carousel-caption">
                <h3 id="contain3">You can have anything you want in life if you dress for it</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/banner3.jpg" alt="cloth3" width="1200px" height="500px">
            <div class="carousel-caption">
                <h3 id="contain3">Fashion is like eating, you shouldn't stick to the same menu</h3>
            </div>
        </div>
    </div>
</div>
          @include('product')    
@endsection