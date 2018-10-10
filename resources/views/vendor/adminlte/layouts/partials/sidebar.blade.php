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
                    <a href="{{ url('/home') }}"><i class="fa fa-circle text-success"></i> Admin</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is('home') ? "active" : "" }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>{{ trans('adminlte_lang::message.admin') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('user/create') }}">{{ trans('adminlte_lang::message.addadmin') }}</a></li>
                    <li><a href="{{ url('user') }}">{{ trans('adminlte_lang::message.listadmin') }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.category') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    {{-- <li><a href="{{ url('category/create') }}">{{ trans('adminlte_lang::message.addcategory') }}</a></li> --}}
                    <li><a href="{{ url('category') }}">{{ trans('adminlte_lang::message.listcategory') }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.product') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('product/create') }}">{{ trans('adminlte_lang::message.addproduct') }}</a></li>
                    <li><a href="{{ url('product') }}">{{ trans('adminlte_lang::message.listproduct') }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-picture-o'></i> <span>{{ trans('adminlte_lang::message.gallery') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('gallery/create') }}">{{ trans('adminlte_lang::message.newgallery') }}</a></li>
                    <li><a href="{{ url('gallery') }}">{{ trans('adminlte_lang::message.listgallery') }}</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('cart') ? "active" : "" }}"><a href="{{ url('cart') }}"><i class='fa fa-shopping-cart'></i> <span>{{ trans('adminlte_lang::message.customerordered') }}</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
