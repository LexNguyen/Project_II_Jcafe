<?php $__env->startSection('htmlheader_title'); ?>
    Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<head>
    <meta charset="utf-8">
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



</head>
<body class="hold-transition register-page" style="background-image: url(<?php echo e(asset('/img/item-09.jpg')); ?>) ;padding-top: 0px ">
    <div id="app">
        <div class="register-box">
            <div class="register-logo">
                <a href="<?php echo e(url('/home')); ?>"><b>JCOFFEE</a>
            </div>

            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> <?php echo e(trans('adminlte_lang::message.someproblems')); ?><br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="register-box-body" style="background: #69150066;color: #fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0);">
                <p class="login-box-msg"><?php echo e(trans('adminlte_lang::message.registermember')); ?></p>
                <form action="<?php echo e(url('/register')); ?>" method="post">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.fullname')); ?>" name="name" value="<?php echo e(old('name')); ?>"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.email')); ?>" name="email" value="<?php echo e(old('email')); ?>"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.password')); ?>" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.retrypepassword')); ?>" name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal"><?php echo e(trans('adminlte_lang::message.terms')); ?></button>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(trans('adminlte_lang::message.register')); ?></button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <?php echo $__env->make('adminlte::auth.partials.social_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <a href="<?php echo e(url('/login')); ?>" class="text-center"><?php echo e(trans('adminlte_lang::message.membreship')); ?></a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>
    <section id="showcase" name="showcase"style="background-color: #4e2626"></section>
    <div id="showcase" style="background-color: #4e2626">
        <div class="container">
            <div class="row">
                <h1 class="centered"><?php echo e(trans('adminlte_lang::message.screenshots')); ?></h1>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo e(asset('/img/item-05.png')); ?>" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo e(asset('/img/item-06.png')); ?>" alt="">
                            </div>
                             <div class="item">
                                <img src="<?php echo e(asset('/img/item-07.png')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div><!-- /container -->
    </div>
    <section id="contact" name="contact"></section> 
    <div id="c">
        <div class="container">
            <p>
                <a href="https://github.com/acacha/adminlte-laravel"></a><b>JCoffee</b></a>. <?php echo e(trans('adminlte_lang::message.descriptionpackage')); ?>.<br/>
                <strong>Copyright &copy; 2015 <a href="http://acacha.org">Acacha.org</a>.</strong> <?php echo e(trans('adminlte_lang::message.createdby')); ?> <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. <?php echo e(trans('adminlte_lang::message.seecode')); ?> <a href="https://github.com/acacha/adminlte-laravel">Github</a>
                <br/>
                AdminLTE <?php echo e(trans('adminlte_lang::message.createdby')); ?> Abdullah Almsaeed <a href="https://almsaeedstudio.com/">almsaeedstudio.com</a>
                <br/>
                 Pratt Landing Page <?php echo e(trans('adminlte_lang::message.createdby')); ?> <a href="http://www.blacktie.co">BLACKTIE.CO</a>
            </p>

        </div>
    </div>
</div>


    <?php echo $__env->make('adminlte::layouts.partials.scripts_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('adminlte::auth.terms', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/vendor/adminlte/auth/register.blade.php ENDPATH**/ ?>