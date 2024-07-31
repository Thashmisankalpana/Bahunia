@extends('layouts.master')
@section('content')
<ol class="breadcrumb bg-white" id="contain">
    <li class="breadcrumb-item">HOME</li>
  </ol>
    <hr>
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
<div class="container">
    <table class="table table-boarderless table-hover" id="contain3" width="100%" cellspacing="0">
        <tr>
            <td width="50%">
                <div class="mid-section main-info-area">
                <div class=" wrap-logo-top left-section">
                <a class="link-to-home"><img src="assets/img/banner4.jpg" alt="banner4" width="540" height="190"></a>
                </div>
            </td>
            <td width="50%">
                <div class="mid-section main-info-area">
                <div class=" wrap-logo-top left-section">
                <a class="link-to-home"><img src="assets/img/banner5.jpg" alt="mercado" width="540" height="190"></a>
                </div>
        </tr>       
</table>
  <br>
<table class="table table-borderless" >
    <tr class="table-info">
        <td class="bg-info">Latest Products</td>
    </tr>
</table>
<div class="row">
@foreach( $products as $item)
  <div class="col-sm-4">
    <div class="card border-info mb-3">
      <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" alt="" class="card-img-top">
    <div class="card-body">
      <h4 class="card-title">${{$item->price}}</h4>
      </a>
      <h5 class="card-text">{{$item->category}}</h5>
      <p class="card-text">{{$item->description}}</p>
    </div>
  </div>
  </div>
@endforeach
</div>
<table class="table table-borderless" >
  <tr class="table-info">
    <td class="bg-info">Product Categories</td>
  </tr>
  <tr>
    <td><img src="assets/img/images.jpg" alt="" width="100%" height="350px"></td>
  </tr>
</table>
  <div class="row">
    <div class="col-sm-4">
      <div style="width:20rem" class="card border-info mb-3">
        <img src="assets/img/boyst3.jpg" alt="" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title">Rs.1500</h4>
            <p class="card-text">Kids Summer T-Shirt Cartoon Animals Shark Dinosaur Print Toddler Boys Cotton Tee Tops T-Shirts</p>
            <br>
            <a href="a" class="btn btn-outline-info">Add To Cart</a>
          </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div style="width:20rem" class="card border-info mb-3">
        <img src="assets/img/kidress4.jpg" alt="" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Rs.1500</h4>
          <p class="card-text">Girls Clothes 2022 New Summer Princess Dresses Flying Sleeve Kids Casual Dress Toddler Wedding Dresses for Baby Girls</p>
          <a href="a" class="btn btn-outline-info">Add To Cart</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-product">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner6.jpg" alt="cloth1" width="1100px" height="350px">
            </div>
            <div class="carousel-item">
                <img src="assets/img/banner7.jpg" alt="cloth3" width="1100px" height="350px">
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
</div>
  <br> 
@endsection