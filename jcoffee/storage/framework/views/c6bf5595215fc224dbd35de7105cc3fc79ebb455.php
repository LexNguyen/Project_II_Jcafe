<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.search')); ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><?php echo e(trans('adminlte_lang::message.header')); ?></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span><?php echo e(trans('adminlte_lang::message.product')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('products/inputP')); ?>"><i class='fa fa-plus-square-o'></i><span><?php echo e(trans('adminlte_lang::message.addproduct')); ?></span></a></li>
                    <li><a href="<?php echo e(url('products/showP')); ?>"><i class='fa fa-list'></i><span><?php echo e(trans('adminlte_lang::message.productlist')); ?></span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span><?php echo e(trans('adminlte_lang::message.order')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('order/inputOrder')); ?>"><i class='fa fa-plus-square-o'></i><span><?php echo e(trans('adminlte_lang::message.addorder')); ?></span></a></li>
                    <li><a href="<?php echo e(url('order/showOrder')); ?>"><i class='fa fa-list'></i><span><?php echo e(trans('adminlte_lang::message.orderlist')); ?></span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span><?php echo e(trans('adminlte_lang::message.orderDetail')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('order_detail/postProduct')); ?>"><i class='fa fa-plus-square-o'></i><span><?php echo e(trans('adminlte_lang::message.addOrderDetail')); ?></span></a></li>
                    <li><a href="<?php echo e(url('order_detail/showOrder')); ?>"><i class='fa fa-list'></i><span><?php echo e(trans('adminlte_lang::message.orderDetailList')); ?></span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span><?php echo e(trans('adminlte_lang::message.material')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('material/input')); ?>"><i class='fa fa-plus-square-o'></i><span><?php echo e(trans('adminlte_lang::message.addmaterial')); ?></span></a></li>
                    <li><a href="<?php echo e(url('material/showMaterial')); ?>"><i class='fa fa-list'></i><span><?php echo e(trans('adminlte_lang::message.materiallist')); ?></span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span><?php echo e(trans('adminlte_lang::message.category')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('category/inputc')); ?>"><i class='fa fa-plus-square-o'></i><span><?php echo e(trans('adminlte_lang::message.addcategory')); ?></span></a></li>
                    <li><a href="<?php echo e(url('category/showCategory')); ?>"><i class='fa fa-list'></i><span><?php echo e(trans('adminlte_lang::message.categorylist')); ?></span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span><?php echo e(trans('adminlte_lang::message.employee')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('employee/inputEmployee')); ?>"><i class='fa fa-plus-square-o'></i><span><?php echo e(trans('adminlte_lang::message.addemployee')); ?></span></a></li>
                    <li><a href="<?php echo e(url('employee/showEmployee')); ?>"><i class='fa fa-list'></i><span><?php echo e(trans('adminlte_lang::message.employeelist')); ?></span></a></li>
                </ul>
            </li>



        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\hadtt\project\jcoffee\resources\views/vendor/adminlte/layouts/partials/sidebar.blade.php ENDPATH**/ ?>