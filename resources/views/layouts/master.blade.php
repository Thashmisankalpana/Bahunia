<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('logins'))
{
    $total= ProductController::cartItem();    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.js"></script>

    <style>
        .detail-img{
            height: 20px;
        }
        .trending-img{
            height:20px;
        }
        .cart-list-devider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    </style>

    <title>Bahunia</title>
</head>
<body>

<table class="table table-dark" width="100%" height="1%">
    <tr>
        <td>
<div class="container custom-product">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pt-0 pb-0" width="100%">
        <div class="container" id="contain">
                <ul class="navbar-nav">
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Hotline: (+123) 456 789" href="#" ><img src="assets/img/Phone-icon.png" alt="mercado" style="width:15px;">Hotline: (+123) 456 789</a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="assets/img/United-Kingdom-icon.png" alt="English" style="width:20px;"> English</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><img src="assets/img/France-icon.png" alt="French" style="width:20px;"> French</a>
                            <a href="#" class="dropdown-item"><img src="assets/img/Belgium-Flag-icon.png" alt="German" style="width:20px;"> German</a>
                            <a href="#" class="dropdown-item"><img src="assets/img/Canada-icon.png" alt="Canada" style="width:20px;"> Canada</a>
                        </div>
                    </li>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dollar (USD)</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Euro (EUR)</a>
                            <a href="#" class="dropdown-item">Pound (GBP)</a>
                        </div>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    <li>
                        <a href="" class="nav-link"></a>
                    </li>
                    @if(Session::has('logins'))
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Session::get('user')['name']}}</a>
                        <div class="dropdown-menu">
                            <a href="/myorder" class="dropdown-item">Orders</a>
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                    @else
                    <li><a href="/login">Login</a></li>
                    @endif
                </ul>
        </div>
    </nav>
    </td>
    </tr>
    </table>
    <table class="table table-boarderless table-light">
        <tr>
            <td width="10%">
            <div class="mid-section main-info-area">
            <div class=" wrap-logo-top left-section">
            <a class="link-to-home"><img src="assets/img/logo.png" alt="mercado" style="width:100px;"></a>
            </div>
            </td>   
            <td width="15%">
                    <br>
                <h2 id="contain3">BAHUNIA</h2>
                </div>
                </td>
            <td width="60%">
                <br>
                <div class="container input-group">
                <input type="text"[name="query"] class="form-control search-box" placeholder="Search here...">
                <div class="input-group-prepend">
                <span class="input-group">
                    <button type="submit" class="btn btn-info">SEARCH</button>
                </span>
            </div>
            </div>
            </td>
            <td width="15%">
                <br>
				<div class="wrap-icon-section minicart">
					<a href="/cartlist" class="link-direction">
                    <img src="assets/img/shopping-basket-icon.png" alt="cart" style="width:30px;">
							<div class="left-info">
								<span class="index">Cart({{$total}})<br></span>
							</div>
					</a>
				</div>
            </td>
        </tr>
    </table>     
    </div>
    <div class="dropdown-menu">
        <a href="" class="dropdown-item">All Category</a>
        <a href="" class="dropdown-item">Skirt</a>
        <a href="" class="dropdown-item">Blouse</a>
    </div>
    <div class="wrap-search center-section">
    <div class="container-fulid">
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <div class="container" id="contain">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">CART</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">CHECKOUT</a>
                    </li>
                </ul>
        </div>
    </nav>
    @yield('content')
    <div class="box footer">
        <table class="table table-borderless table-dark" id="contain3" width="100%" cellspacing="0">
        <tr>
            <td width="10%">
        </td>
        <td width="20%">
            <h6 class="fc-name-sm">Free Shipping <img src="assets/img/Truck-icon.png" alt="truck" style="width:40px;"></h6>
			<p class="fc-desc">Free On Order Over $99</p>        
        </td>
        <td width="20%">
            <h6 class="fc-name">Guarantee <img src="assets/img/Recycle-icon.png" alt="recycle" style="width:30px;"></h6>
			<p class="fc-desc">30 Days Money Back</p>
        </td>
        <td width="20%">
            <h6 class="fc-name">Online Support <img src="assets/img/support-icon.png" alt="support" style="width:30px;"></h6>
			<p class="fc-desc">We Have Support 24/7</p>
        </td>
        <td width="10%">
        </td>
    </tr>
    <tr>
        <td width="5%">
        </td>
        <td width="30%">
            <h6 class="item-header">Contact Details</h6>
            <p class="contact-txt"><img src="assets/img/Envelope-icon.png" alt="mail" style="width:15px;"> Contact@yourcompany.com <br><br><img src="assets/img/Location-icon.png" alt="mercado" style="width:15px;"> 45 Grand Central Terminal New York,NY 1017 United State USA <br><br><img src="assets/img/Phone1-icon.png" alt="mercado" style="width:15px;">(+123) 456 789 - (+123) 666 888 <br></p>      
        </td>
        <td width="30%"> 
            <h6 class="item-header">My Account</h6>
                <div class="wrap-vertical-nav" id="contain1">
                    <ul>
                        <li class="menu-item text-dark"><a href="#" class="link-term ">My Account</a></li>
                        <li class="menu-item text-dark"><a href="#" class="link-term">Brands</a></li>
                        <li class="menu-item text-dark"><a href="#" class="link-term">Gift Certificates</a></li>
                        <li class="menu-item text-dark"><a href="#" class="link-term">Affiliates</a></li>
                        <li class="menu-item text-dark"><a href="#" class="link-term">Wishlist</a></li>
                    </ul>
                </div>
        </td>
        <td width="30%">
            <h6 class="item-header">Infomation</h6>
            <div class="wrap-vertical-nav" id="contain1">
				<ul>
                    <li class="menu-item text-dark"><a href="#" class="link-term">Contact Us</a></li>
					<li class="menu-item text-dark"><a href="#" class="link-term">Returns</a></li>
					<li class="menu-item text-dark"><a href="#" class="link-term">Site Map</a></li>
					<li class="menu-item text-dark"><a href="#" class="link-term">Specials</a></li>
					<li class="menu-item text-dark"><a href="#" class="link-term">Order History</a></li>
				</ul>
			</div>
        </td>
        <td width="5%">
        </td>
    </tr>
  </table>
</body>
</html>