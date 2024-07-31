@extends('layouts.master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
        <table class="table-stripped">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}} Sri Lankan Rupees</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 Sri Lankan Rupees</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>400 Sri Lankan Rupees</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+400}} Sri Lankan Rupees</td>
                </tr>
            </tbody>
        </table>

        <form method="POST" action="orderplace">
            @csrf
            <div class="form-group">
                <textarea placeholder="Enter your Name" name="name">Name</textarea>
                <textarea placeholder="Enter your Delivery Address" name="DAddress">Delivery Address</textarea>
                <textarea placeholder="Enter your Email address" name="email">Email address</textarea>
                <textarea placeholder="Enter your Contact Number 01" name="CNumber01">Contact Number 01</textarea>
                <textarea placeholder="Enter your Contact Number 02" name="CNumber02">Contact Number 02</textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label>
                <p><input type="radio" value="cash" name="payment"><span>Payment On Delivery</span></p>
            </div>
            <button type="submit" class="btn btn-warning">Order Now</button>
        </form>
    </div>
</div>

@endsection