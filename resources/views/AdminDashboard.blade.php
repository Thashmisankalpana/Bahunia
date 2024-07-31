@extends('layouts.master')
@section('content')
<ol class="breadcrumb bg-white" id="contain">
    <li class="breadcrumb-item">DASHBOARD</li>
  </ol>
    <hr>
    <div class="row">
<div class="col-3">
<nav class ="navbar bg-light">
<ul class ="nav navbar-nav">
<li class ="nav-item">
<a class ="nav-link" href="#"> Dashboard </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> Customers </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> Orders </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> Products</a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> Reports</a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> Settings</a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
<li class ="nav-item">
<a class ="nav-link" href="#"> </a>
</li>
</ul>
</nav>
</div>
<div class="col-9">
<div class="container">
</div>
<div class ="container">
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

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>    
</div>
    <br> 
</div>
</div>
</div>
<br>
@endsection