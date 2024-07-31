@extends('layouts.master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h3>Orders List</h3>
            <div class="">
                @foreach($orders as $item)
                <div class="row search-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                        <h4>{{$item->name}}</h4>
                        <h5>Delivery Status : {{$item->status}}</h5>
                        <h5>Payment Method : {{$item->payment_method}}</h5>
                        <h5>Delivery Status : {{$item->payment_status}}</h5>
                        <h5>Delivery Address : {{$item->address}}</h5>
                        <h5>Price : {{$item->price}} Sri Lankan Rupees</h5>
                    </div>
                </div>
                @endforeach
            </div >
        </div>
    </div>
</div>

@endsection