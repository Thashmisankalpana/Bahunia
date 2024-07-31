@extends('layouts.master')
@section('content')
    <ol class="breadcrumb bg-white" id="contain">
        <li class="breadcrumb-item"><a href="/home">HOME</a></li>
        <li class="breadcrumb-item">REGISTER</li>
    </ol>
    <div class="container" >
            <form action = "save" method = "POST" class="form-group" style="width:40%; margin-left:30%;">

            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}} 
                </div>
            @endif    
            
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

                @csrf
            <h2 class="container-fulid">Register</h2><br>
            
            <h5>Personal Information</h5>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="Name" class="form-control p_input">
                <span style="color:red">@error('Name'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="">Delivery Address</label>
                <input type="text" name="Delivary_Address" class="form-control p_input">
                <span style="color:red">@error('Delivary_Address'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="">Telephone Number 01</label>
                <input type="text" name="Telephone_Number_01" class="form-control p_input">
                <span style="color:red">@error('Telephone_Number_01'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="">Telephone Number 02</label>
                <input type="text" name="Telephone_Number_02" class="form-control p_input">
                <span style="color:red">@error('Telephone_Number_02'){{$message}} @enderror</span>
            </div>
            <h5>Login Details</h5>
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="text" name="Email_Address" class="form-control p_input">
                <span style="color:red">@error('Email_Address'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="">Password *</label>
                <input type="password" name="Password" class="form-control p_input">
                <span style="color:red">@error('Password'){{$message}} @enderror</span>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-block enter-btn">Sign Up</button>
            </div>
            <p class="sign-up">You have an Account?<a href="/login" id="contain3">Sign In</a></p>
            </form>
            <br>
    </div>
  @endsection