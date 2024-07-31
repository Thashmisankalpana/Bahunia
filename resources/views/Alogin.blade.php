@extends('layouts.master')
@section('content')
    <ol class="breadcrumb bg-white" id="contain">
        <li class="breadcrumb-item"><a href="/">HOME</a></li>
        <li class="breadcrumb-item">LOGIN</li>
    </ol>
    <div class="container">
        <form action = "/check" method = "POST" class="form-group" style="width:40%; margin-left:30%;">
                
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
            <h2 class="container-fulid">Login</h2><br>
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="Email_Address" class="form-control p_input">
                <span style="color:red">@error('Email_Address'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="Password" class="form-control p_input">
                <span style="color:red">@error('Password'){{$message}} @enderror</span>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-block enter-btn">Sign In</button>
            </div>
            <p class="sign-up">If You are Customer.Login This--><a href="/login" id="contain3">Login</a></p>
            <a href="#" id="contain3">Forgot Password</a>
        </form>
    </div>
  @endsection