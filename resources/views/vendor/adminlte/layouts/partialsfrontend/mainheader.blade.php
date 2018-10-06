<!-- Main Header -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars fa-2x"></i>
        </button>
        <!-- /responsive nav button -->             
        <!-- logo -->
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="{{ asset('img/logo1.jpg') }}" id="logo">
        </a>
        <!-- /logo -->
    </div>

    <!-- main nav -->
    <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <ul id="nav" class="nav navbar-nav">
            @if(Request::is('/'))
                <li class="menu-active"><a href="#body" class="current">HOME</a></li>
                <li><a href="#features">INTRODUCTION</a></li>
                <li><a href="#works">GALLERY</a></li>
                <li><a href="#sales">SALES PROMOTION</a></li>
                <li><a href="#team">ABOUT US</a></li>
                <li><a href="#facts">FACTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            @else
                <li class="current linkfix_LogIn"><a href="{{ route('/') }}">RETURN HOME</a></li>
                
            @endif
            <li>
                <div class="cart box_1">
                    <a href="checkout.html">
                        <!-- <h3>
                            <span class="simpleCart_total">Your cart: $0.00 </span> (<span
                                id="simpleCart_quantity" class="simpleCart_quantity"> 0
                            </span>)<img src="img/logo_4.jpg" alt="" width="20">
                        </h3> -->
                    </a>
                    <div class="clearfix"></div>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /main nav -->
            
</header>