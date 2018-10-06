<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partialsfrontend.htmlheader')
@show

<body id="body">

    <!-- preloader image -->
    <div id="preloader">
        <img src="{{ asset('img/preloader1.gif') }}" alt="Preloader">
    </div>
    <!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        @include('adminlte::layouts.partialsfrontend.mainheader')
        <!--
        End Fixed Navigation
        ==================================== -->
        <!--
        Home Slider
        ==================================== -->
        
        @yield('home-content')
        @yield('store-content')
        
        @include('adminlte::layouts.partialsfrontend.footer')
            
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->

    @section('scripts')
        @include('adminlte::layouts.partialsfrontend.scripts')
    @show
</body>
</html>
