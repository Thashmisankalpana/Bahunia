@extends('layouts.master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h3>Cart List</h3>
            <a class="btn btn-info" href="/ordernow">Order Now</a><br><br>
            <div class="">
                @foreach($products as $item)
                <div class="row search-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                        <h4>{{$item->name}}</h4>
                        <h5>{{$item->description}}</h5>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removeCart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                        <h5 class="text text-warning">{{$item->price}}</h5>
                    </div>
                </div>
                @endforeach
                <a class="btn btn-info" href="/ordernow">Order Now</a><br><br>
            </div >
        </div>
    </div>
</div>

@endsection