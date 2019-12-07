<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation" style="background-color: #c9c2c2">

<div id="app"> 
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>JCOFFEE</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <li><a href="{{ url('products/showProduct') }}" class="smoothScroll">{{ trans('Product') }}</a></li>
                    <li><a href="{{ url('/description') }}" class="smoothScroll">{{ trans('About Us') }}</a></li>
                    <li><a href="{{ url('/contactUs') }}" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    </div>
    
	<div class="container" style="margin-top: 70px;" style="border-style: inset; padding: 5px">
    <center>
    <h1>PRODUCT LIST</h1>
    </center>
		<div class="row">
        @foreach($productList as $item)
        <div class="col-lg-3"><tr>
        <div style="border: 2px solid #f0f0f0;box-shadow: 6px 8px 8px 0 rgba(0, 0, 0, 0.2);margin: 5px; padding:5px">
					<img src="{{$item->thumbnail}}"width=238px height=250px>
					<p style="font-size: 20px">{{$item->name}}</p>
					<p >{{number_format( $item->price)}}VND <del style="color:red">{{ number_format($item->price_detail) }}VND</del></p>
					</tr>
					</div>
					</div>
        @endforeach	
			</div>
			{{ $productList->links() }}
	</div>
    <footer>
		 <div class="row footer" style="background-color: black;font-weight: bolder;color: red">
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div>
              <a class="f-title">PRODUCTS</a>
            </div>
            <ul>
              <li><a href="bulbs.html">Cafe G7</a></li>
              <li><a href="spotlight.html">Cafe Đen</a></li>
              <li><a href="decoration.html">Cafe Sữa</a></li>
              <li><a href="smart.html">Cafe Phin</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div>
              <a class="f-title">SERVICES</a>
            </div>
            <ul>
              <li><a href="#">Trung Nguyen</a></li>
              <li><a href="#">Cafe Biz</a></li>
              <li><a href="#">Warranty</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div>
              <a class="f-title">CONTACT</a>
            </div>
            <ul>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Recruitment</a></li>
              <li><a href="#">Agent authorisation</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3">
            <div>
              <a class="f-title">INFO</a>
            </div>
            <ul>
              <li><a href="#"><img src="{{ asset('/img/hotline.png') }}" alt=""> 19001900</a></li>
              <li><a>No 1. Duong Dinh Nghe, Ha Noi, Viet Nam</a></li>
              <li>
                <a href="#"><img src="{{ asset('/img/FB.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('/img/UT.png') }}" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row footer" style="background-color: black">
            <div class="col-md-12 col-xs-12">
                <p class="copyright" style="color: #f0f0f0">© Copyright 2019 LED All rights Reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>