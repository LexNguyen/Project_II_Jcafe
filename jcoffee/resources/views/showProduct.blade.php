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
<body data-spy="scroll" data-offset="0" data-target="#navigation">

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
                    <li class="active"><a href="{{ url('/index') }}" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
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
					<div style="border: 1px solid #ccc;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);margin-left: 5px; padding:5px">
					<img src="{{$item->thumbnail}}"width="100%" height="100%">
					<p style="font-size: 20px">{{$item->name}}</p>
					<p >{{number_format( $item->price)}}VND <del style="color:red">{{ number_format($item->price_detail) }}VND</del></p>
					</tr>
					</div>
					</div>
        @endforeach	
			</div>
			{{ $productList->links() }}
	</div>
</body>
</html>