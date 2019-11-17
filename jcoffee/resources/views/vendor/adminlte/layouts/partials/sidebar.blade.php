<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-th-large'></i> <span>{{ trans('adminlte_lang::message.product') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('products/inputP') }}"><i class='fa fa-plus-square-o'></i><span>{{ trans('adminlte_lang::message.addproduct') }}</span></a></li>
                    <li><a href="{{ url('products/showP') }}"><i class='fa fa-list'></i><span>{{ trans('adminlte_lang::message.productlist') }}</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-reorder'></i> <span>{{ trans('adminlte_lang::message.order') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('order/inputOrder') }}"><i class='fa fa-plus-square-o'></i><span>{{ trans('adminlte_lang::message.addorder') }}</span></a></li>
                    <li><a href="{{ url('order/showOrder') }}"><i class='fa fa-list'></i><span>{{ trans('adminlte_lang::message.orderlist') }}</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-reorder'></i> <span>{{ trans('adminlte_lang::message.orderDetail') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('order_detail/postProduct') }}"><i class='fa fa-plus-square-o'></i><span>{{ trans('adminlte_lang::message.addOrderDetail') }}</span></a></li>
                    <li><a href="{{ url('order_detail/showOrder') }}"><i class='fa fa-list'></i><span>{{ trans('adminlte_lang::message.orderDetailList') }}</span></a></li>
                </ul>
            </li>



        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
