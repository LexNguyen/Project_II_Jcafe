<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico" />
    <link rel="stylesheet" href="./js/lightslider/lightslider.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="./js/lightslider/lightslider.js"></script>
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
    <style >
    	input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contact {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  body{
  	 background-color:  #e3e6ba;
  }
    </style>
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
                    <li class="active"><a href="<?php echo e(url('/')); ?>" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.home')); ?></a></li>
                    <li><a href="<?php echo e(url('products/showProduct')); ?>" class="smoothScroll"><?php echo e(trans('Product')); ?></a></li>
                    <li><a href="<?php echo e(url('/description')); ?>" class="smoothScroll"><?php echo e(trans('About Us')); ?></a></li>
                    <li><a href="<?php echo e(url('/contactUs')); ?>" class="smoothScroll"><?php echo e(trans('adminlte_lang::message.contact')); ?></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
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
    </div>
    <div class="container" style="border-style: inset; padding: 5px">
        <center><h1>CONTACT US</h1></center>
        	
        <div class="row">

            <div class="col-lg-10 col-sm-12 col-md-10 div-contact">
                <div class="uk-card uk-card-default uk-card-body">
                    <h3>JCOFFEE HÀ NỘI</h3>
                    <p>Showroom: số 8, Tôn Thất Thuyết, Cầu Giấy, Hà Nội</p>
                    <p>Hotline:0123456789-0113456789</p>
                    <p>Webside: </p>
                    <p>Email:<a href="https://mail.google.com/">jcoffee@gmail.com</a></p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1119066122587!2d105.7838744147633!3d21.028207885998736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4db3852c35%3A0xf21ade9841a7cdab!2zMTA4IFTDtG4gVGjhuqV0IFRodXnhur90LCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1557042071054!5m2!1sen!2s" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 div-contact">
                <!--Đưa form liên hệ vào đây-->
                <div class="container contact">
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </div>
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
</html><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/contactUs.blade.php ENDPATH**/ ?>