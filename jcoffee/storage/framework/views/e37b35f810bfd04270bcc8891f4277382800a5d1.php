<!DOCTYPE html>
<title>About Us</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="./js/lightslider/lightslider.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Akronim|Sofia" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - <?php echo e(trans('adminlte_lang::message.landingdescription')); ?> ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - <?php echo e(trans('adminlte_lang::message.landingdescription')); ?> ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - <?php echo e(trans('adminlte_lang::message.landingdescription')); ?>" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title><?php echo e(trans('adminlte_lang::message.landingdescriptionpratt')); ?></title>

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('/css/all-landing.css')); ?>" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<body data-spy="scroll" data-offset="0" data-target="#navigation">
<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top !important">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle !important" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>JCOFFEE</b></a>
            </div>
            <div class="navbar-collapse collapse !important">
                <ul class="nav navbar-nav !important">
                    <li class="active"><a href="<?php echo e(url('/')); ?>" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.home')); ?></a></li>
                    <li><a href="<?php echo e(url('products/showProduct')); ?>" class="smoothScroll"><?php echo e(trans('Product')); ?></a></li>
                    <li><a href="<?php echo e(url('/description')); ?>" class="smoothScroll"><?php echo e(trans('About Us')); ?></a></li>
                    <li><a href="<?php echo e(url('/contactUs')); ?>" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.contact')); ?></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right !important">
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>"><?php echo e(trans('adminlte_lang::message.login')); ?></a></li>
                        <li><a href="<?php echo e(url('/register')); ?>"><?php echo e(trans('adminlte_lang::message.register')); ?></a></li>
                    <?php else: ?>
                        <li><a href="/home"><?php echo e(Auth::user()->name); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <div class="row" style="font-family: 'Sofia', cursive; padding-top: 50px;background-color: #e3e6ba" >
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!--Đưa nội dung about vào đây-->


                <div class="content">
                    <center>
                        <h1>ABOUT US</h1>
                        <img src="http://www.coffeetrantien.vn/Userfiles/Upload/images/Modules/News/0_news4.jpg" width="100%">

                    </center>
                    <br>
                    <p>Established in 2001, Cafe Deluxe is a locally-owned, independent catering and restaurant service. Fifteen years later, we’re still happily serving the Ottawa community with quality fresh food. Our catering service has grown to become one of Ottawa’s largest and most recognized services. It’s almost as popular as our famous cookies!</p>
                    <img  src="https://images.foody.vn/res/g89/882770/prof/s576x330/foody-upload-api-foody-mobile-cafe-sua-da-190118110440.jpg" style="width: 500px;float: right">
                        <br>
                    <p>For over 15 years, Cafe Deluxe has been catering memorable meals in Ottawa. From humble beginnings as a homegrown restaurant in the heart of the city, our exceptional service and attention to detail has allowed us to steadily grow to become one of Ottawa’s largest and most recognized catering companies.

                    Whether it’s a corporate function, upscale event, family gathering or an intimate wedding, Cafe Deluxe provides delicious meals that fit your vision and your budget. Our dedicated and experienced team will cheerfully give your event the care and attention it deserves.
                    </p>
                    <br>
                    <img src="https://images.foody.vn/res/g89/882770/prof/s576x330/foody-upload-api-foody-mobile-cafe-sua-da-190118110440.jpg" style="width: 500px;float: left;margin-right: 10px">
                <br>
                    <p >Our customers have offered us over a decade of memorable moments serving the Ottawa community, and so we believe the least we can do is continue serving them delicious dishes with a heartfelt smile. Customer service is a cornerstone of our business, and receiving a smile in return is what we strive for – we hope that our food will make everyone’s day a little bit better.

                    As such, we also strive to continuously improve our menu to satisfy your varying needs. From vegetarian, to gluten free, to diverse ethnic options, we want our customers to feel like We cater to you.</p>
                <br>
                <p>At Cafe Deluxe, we pride ourselves on the quality and freshness of our meals. Everything is made in-house by our chefs each and every day using only the best ingredients. Owner Janet Moss still bakes hundreds of our signature cookies every morning! And because we also pride ourselves on contributing to our community, we are committed to using as much local produce as possible.</p>
                </div>
            </div>
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
              <li><a href="#"><img src="<?php echo e(asset('/img/hotline.png')); ?>" alt=""> 19001900</a></li>
              <li><a>No 1. Duong Dinh Nghe, Ha Noi, Viet Nam</a></li>
              <li>
                <a href="#"><img src="<?php echo e(asset('/img/FB.png')); ?>" alt=""></a>
                <a href="#"><img src="<?php echo e(asset('/img/UT.png')); ?>" alt=""></a>
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
</html><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/aboutUs.blade.php ENDPATH**/ ?>