@extends('layouts.master')
@section('content')
<ol class="breadcrumb bg-white" id="contain">
    <li class="breadcrumb-item"><a href="/">HOME</a></li>
    <li class="breadcrumb-item">DETAIL</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <h3>Name : {{$products['name']}}</h3>
            <h3>Price : Rs.{{$products['price']}}</h3>
            <h4>Category : {{$products['category']}}</h4>
            <h4>Description : {{$products['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                @csrf
                <button class="btn btn-dark">Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-info">Buy Now</button>
        </div>
    </div>
</div>
@endsection