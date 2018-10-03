<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Crystal Boutique</title>
    <meta name="description" content="Crystal Boutique">
    <meta name="author" content="CB">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,600,700,800' rel='stylesheet' type='text/css'> -->

        <!-- CSS
            ================================================== -->
            <!-- Fontawesome Icon font -->
            <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free-5.3.1-web/css/all.min.css') }}">
            <!-- Twitter Bootstrap css -->
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
            <!-- jquery.fancybox  -->
            <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
            <!-- animate -->
            <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
            <!-- Main Stylesheet -->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
            <!-- media-queries -->
            <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">

            <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
            <script src="{{ asset('js/simpleCart.min.js') }}"></script>

        </head>

        <body id="body">

            <!-- preloader image -->
            <div id="preloader">
                <img src="{{ asset('img/preloader1.gif') }}" alt="Preloader">
            </div>
            <!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <!-- /responsive nav button -->             
                <!-- logo -->
                <a class="navbar-brand" href="#body">
                    <img src="{{ asset('img/logo1.jpg') }}" id="logo">
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">HOME</a></li>
                        <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>NEW IN</h6>
                                            <li><a href="products.html">New In Clothing</a></li>
                                            <li><a href="products.html">New In Bags</a></li>
                                            <li><a href="products.html">New In Shoes</a></li>
                                            <li><a href="products.html">New In Watches</a></li>
                                            <li><a href="products.html">New In Grooming</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>CLOTHING</h6>
                                            <li><a href="products.html">Polos & Tees</a></li>
                                            <li><a href="products.html">Casual Shirts</a></li>
                                            <li><a href="products.html">Casual Trousers</a></li>
                                            <li><a href="products.html">Jeans</a></li>
                                            <li><a href="products.html">Shorts & 3/4th</a></li>
                                            <li><a href="products.html">Formal Shirts</a></li>
                                            <li><a href="products.html">Formal Trousers</a></li>
                                            <li><a href="products.html">Suits & Blazers</a></li>
                                            <li><a href="products.html">Track Wear</a></li>
                                            <li><a href="products.html">Inner Wear</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <h6>WATCHES</h6>
                                            <li><a href="products.html">Analog</a></li>
                                            <li><a href="products.html">Chronograph</a></li>
                                            <li><a href="products.html">Digital</a></li>
                                            <li><a href="products.html">Watch Cases</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>   
                        </li> -->
                        <li><a href="#features">ABOUT US</a></li>
                        <li><a href="#works">SHOP</a></li>
                        <li><a href="#newgame">NEW FASHION</a></li>
                        <li><a href="#contact">CONTACT</a></li>
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
        <!--
        End Fixed Navigation
        ==================================== -->
        <!--
        Home Slider
        ==================================== -->
        
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <!-- End Indicators bullet -->              
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active" style="background-image: url({{ asset('img/logo_7.jpg') }});background-size: 100% 100%;">
                        <div class="carousel-caption simpleCart_shelfItem">
                            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">BELOVED KIDS & MOM</h2>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"> Các thiết kế dành cho bé đi sâu khai thác vào chất liệu, đảm bảo độ mềm mịn và thân thiện với làn da. Bên cạnh đó các thiết kế vừa giữ được nét tươi tắn, đáng yêu vốn có của các bé lại vừa toát lên được vẻ hiện đại khi diện đồ đôi cùng mẹ !!</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated"><span>Chú ý :</span> Giá trong cửa hàng thời trang có thể khác nhau !</p>
                            <p data-wow-duration="1000ms" class="wow slideInLeft animated"><span id="price">$24.00</span></a><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt="">
                            </p>
                            <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="#"><span class="item_price" style="display: none;">$24.00</span><button id="addtocart" >Mua hàng </button></a></div>

                            
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single slide -->
                    
                    <!-- single slide -->
                    <div class="item" style="background-image: url({{ asset('img/logo_11.jpg') }});background-size: 100% 100%;">
                        <div class="carousel-caption simpleCart_shelfItem">
                            <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">STRIPE AND TOUCH</h2>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated">Họa tiết kẻ sọc trên hai tone màu trắng - đen kinh điển sau bao thập niên vẫn giữ nguyên vẻ đẹp phóng khoáng của riêng mình .Hãy ngắm nhìn, chạm khẽ và trải nghiệm mùa hè của bản thân cùng Stripe & Touch bạn nhé !</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated"><span>Chú ý :</span> Giá trong cửa hàng thời trang có thể khác nhau !</p>
                            <p data-wow-duration="1000ms" class="wow slideInLeft animated"><span id="price">$35.00</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt="">
                            </p>
                            <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="#"><span class="item_price" style="display: none;">$35.00</span><button id="addtocart" >Mua hàng </button></a></div>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single slide -->
                    <!-- single slide -->
                    <div class="item" style="background-image: url({{ asset('img/logo_39.jpg') }});background-size: 100% 100%;">
                        <div class="carousel-caption simpleCart_shelfItem">
                            <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">TREND - FOCUS ON STYLE</h2>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated">Sự đơn giản đến từ kiểu dáng và màu sắc mang đến cho bạn vẻ ngoài thanh lịch mà mỗi cô gái cần có . Hãy nhớ, luôn "focus on style" để tự tin diện đẹp mỗi ngày bạn nhé !</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated"><span>Chú ý :</span> Giá trong cửa hàng thời trang có thể khác nhau !</p>
                            <p data-wow-duration="1000ms" class="wow slideInLeft animated"><span id="price">$59.99</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt="">
                            </p>
                            <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="#"><span class="item_price" style="display: none;">$59.99</span><button id="addtocart" >Mua hàng </button></a></div>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single slide -->
                    <!-- single slide -->
                    <div class="item" style="background-image: url({{ asset('img/logo_15.jpg') }});background-size: 100% 100%;">
                        <div class="carousel-caption simpleCart_shelfItem">
                            <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">FEEL YOUNG FEEL BLUE</h2>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated">Đánh thức nguồn năng lượng tích cực cho mùa hè bằng cách thay đổi bản thân, bắt đầu từ diện mạo. Những thiết kế mới nhất lấy `m hứng chủ đạo từ những đường kẻ sọc hiện đại kết hợp với tone màu với đen - trắng - xanh tinh tế sẽ là nguồn cảm hứng để bạn thỏa sức sáng tạo cùng guu thời trang của mình !</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated"><span>Chú ý :</span> Giá trong cửa hàng thời trang có thể khác nhau !</p>
                            <p data-wow-duration="1000ms" class="wow slideInLeft animated"><span id="price">$29.00</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt="">
                            </p>
                            <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="#"><span class="item_price" style="display: none;">$29.00</span><button id="addtocart" >Mua hàng </button></a></div>
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fab fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single slide -->
                </div>
                <!-- End Wrapper for slides -->
                
            </div>
        </section>
        
        <!--
        End Home SliderEnd
        ==================================== -->
        
        <!--
        About US
        ==================================== -->
        <!-- <a class="various fancybox fancybox.iframe" href="https://www.youtube.com/embed/jid2A7ldc_8?autoplay=1">Youtube (iframe)</a>
            <a class="various fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/jid2A7ldc_8?autoplay=1">Youtube (iframe)</a> -->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        
                        <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                            <img src="{{ asset('img/logo1.jpg') }}" alt="">
                            <h2>Fashion Shops</h2>
                            <div class="devider"><img src="{{ asset('img/logo_40.jpg') }}"></div>
                        </div>

                        <!-- service item -->
                        <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img style="margin-top: -10px;" src="{{ asset('img/logo_41.jpg') }}">
                                </div>
                                
                                <div class="service-desc">
                                    <h3>Sứ mệnh !!</h3>
                                    <p>Mang đến cho người tiêu dùng những sản phẩm thời trang thương hiệu “Made in Viet Nam” - Chất lượng quốc tế, chúng tôi không ngừng đầu tư, sáng tạo, nâng cao kỹ thuật để mang tới Quý khách hàng những trang phục theo đúng nhịp mốt, chất liệu cao cấp nhưng giá cả vô cùng hợp lý .</p>
                                </div>
                            </div>
                        </div>
                        <!-- end service item -->
                        
                        <!-- service item -->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="{{ asset('img/logo_38.jpg') }}">
                                    <!-- <i class="fa fa-gamepad fa-3x"></i> -->
                                </div>
                                
                                <div class="service-desc">
                                    <h3>Châm ngôn ^^</h3>
                                    <p>Tôi cho rằng , để thành công phải tạo được sự khách biệt . Với sản phẩm thời trang , chỉ có chất lượng sản phẩm mới tạo ra được sự khách biệt ấy !! </p>
                                </div>
                            </div>
                        </div>
                        <!-- end service item -->
                        
                        <!-- service item -->
                        <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fab fa-dropbox fa-3x"></i>
                                </div>
                                
                                <div class="service-desc">
                                    <h3>Giải Thưởng **</h3>
                                    <p>Top 20 doanh nghiệp Toàn quốc có sản phẩm và dịch vụ được tin dùng & Top 15 Doanh nghiệp Hội Nhập và Phát triển toàn quốc</p>
                                    <span id="service" class="row"><a href="#"><img style="width: 142px; margin-top: -14px;" src="{{ asset('img/logo_6.jpg') }}" alt=""></a><a href="#"><img style="width: 142px;height: 64px;margin-top: -13px;" src="{{ asset('img/logo_8.jpg') }}" alt=""></a></span>
                                </div>
                            </div>
                        </div>
                        <!-- end service item -->
                        
                    </div>
                </div>
            </section>
            
        <!--
        End Features
        ==================================== -->
        
        <!--
            Review
        -->
        <!--
            ==================================== -->
            
                        </div>
                        <!-- end review item -->    
                    </div>
                </div>
            </section>
        <!-- ===================
            End review
        -->
        <!--
        Best Games
        ==================================== -->
        
        <section id="works" class="works clearfix">
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                        <h2>Mẫu Thời Trang Thịnh Hành</h2>
                        <div class="devider"><img src="{{ asset('img/logo_44.jpg') }}"></div>
                    </div>
                    <div class="sec-sub-title text-center">
                        <p>Thời trang bán chạy nhất từ các nhà phát triển hàng đầu</p>
                    </div>
                    
                    <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                        <ul class="text-center">
                            <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                            <li><a href="javascript:;" data-filter=".action" class="filter">Cá Tính</a></li>
                            <li><a href="javascript:;" data-filter=".adventure" class="filter">Phong Cách</a></li>
                            <li><a href="javascript:;" data-filter=".casual" class="filter">Quyến Rũ</a></li>
                            <li><a href="javascript:;" data-filter=".multiplayer" class="filter">Trẻ Trung</a></li>
                            <li><a href="javascript:;" data-filter=".RPG" class="filter">Năng Động</a></li>
                            <li><a href="javascript:;" data-filter=".sport" class="filter">Thanh Lịch</a></li>

                        </ul>
                    </div>
                    <!-- <select name="" id="">
                        <option value="" data-filter=".action" class="filter">Action</option>
                        <option value="" data-filter=".adventure" class="filter">Advench</option>
                    </select> -->
                </div>
                <div class="project-wrapper">
                    <figure class="mix work-item action">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_24.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Chi Tiết</a>
                            <h4>Mã C1803L01</h4>
                            <p>Năng động , ngày mới vui vẻ ... </p>
                            <div class="pricelist"><span id="price">$24.00</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$24.00</span><button id="addtocart">Mua hàng </button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item adventure multiplayer">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_25.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Chi Tiết</a>
                            <h4>Mã C1803L02</h4>
                            <p>Giản dị mà đẹp kỳ diệu ... </p>
                            <div class="pricelist"><span id="price">$23.00</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$23.00</span><button id="addtocart">Mua hàng </button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item action multiplayer">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_26.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Mua hàng </a>
                            <h4>Mã C1803L03</h4>
                            <p>Tự tin khoe cá tính ... </p>
                            <div class="pricelist"><span id="price">$99.00</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$99.00</span><button id="addtocart">Mua hàng </button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item action adventure casual">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_27.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Chi Tiết</a>
                            <h4>Mã C1803L04</h4>
                            <p>Phong cách quyến lũ lạ thường ... </p>
                            <div class="pricelist"><span id="price">$19.99</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$19.99</span><button id="addtocart" >Mua hàng </button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item action multiplayer sport">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_28.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Detail</a>
                            <h4>Mã C1803L05</h4>
                            <p>Đậm chất quý  phái sang trọng ...</p>
                            <div class="pricelist"><span id="price">$25.99</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$25.99</span><button id="addtocart" >Add to cart</button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item casual RPG">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_29.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Detail</a>
                            <h4>Mã C1803L06</h4>
                            <p>Tôn lên body của cơ thể ... </p>
                            <div class="pricelist"><span id="price">$27.90</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$27.90</span><button id="addtocart">Add to cart</button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item RPG">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_30.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Detail</a>
                            <h4>Mã C1803L07</h4>
                            <p>Mang khuynh hướng lịch lãm ...  </p>
                            <div class="pricelist"><span id="price">$39.99</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$39.99</span><button id="addtocart" >Add to cart</button></a>
                        </figcaption>
                    </figure>
                    
                    <figure class="mix work-item multiplayer">
                        <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ asset('img/logo_31.jpg') }}" alt="" class="gamelist"></div>
                        <figcaption class="overlay simpleCart_shelfItem">
                            <a class="gamedetail"  title="Detail" href="#">Detail</a>
                            <h4>Mã C1803L08</h4>
                            <p>Giúp hồi xuân ...</p>
                            <div class="pricelist"><span id="price">$49.99</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
                            <a class="item_add" href="#"><span class="item_price" style="display: none;">$49.99</span><button id="addtocart">Add to cart</button></a>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- End container -->
        </section>
        
        <!--
        End Best Game
        ==================================== -->
        
        <!-- NEW GAME -->
        <section id="newgame">
            <img src="{{ asset('/img/logo_45.jpg') }}" width="100%" height="100%">
        </section>

        <!--
        Meet Our Team
        ==================================== -->        
        
        <section id="team" class="team">
            <div class="container">
                <div class="row">
                    
                    <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                        <h2>THÀNH VIÊN NHÓM</h2>
                        <div class="devider"><img src="{{ asset('img/logo_44.jpg') }}"></div>
                    </div>
                    
                    <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                        <p>Các thành viên trong nhóm đều trẻ, đẹp trai , có trách nhiệm, năng động, sáng tạo và nhiệt tình và chăm chỉ ^^ </p>
                    </div>
                    <!-- single member -->
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="member-thumb">
                            <img style="width: 265px;height: 390px;" src="{{ asset('img/logo_19.jpg') }}" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Trường Giang</h5>
                                <p>Tuổi : 21 !</p>
                                <p>Tính cách : Vui tính, thật thà, chăm chỉ ^^</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Nguyễn Trường Giang</h4>
                        <span>Trưởng Nhóm</span>
                    </figure>
                    <!-- end single member -->
                    
                    <!-- single member -->
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="member-thumb">
                            <img style="width: 265px;height: 390px;" src="{{ asset('img/logo_54.jpg') }}" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Huy Hoàng</h5>
                                <p>Tuổi : 19 !</p>
                                <p>Tính cách : Siêu hướng ngoại , người bình thường, có trách nhiệm ^^</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Ngô Huy Hoàng</h4>
                        <span>Phó Nhóm</span>
                    </figure>
                    <!-- end single member -->
                    
                    <!-- single member -->
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="member-thumb">
                            <img style="width: 265px;height: 390px;" src="{{ asset('img/logo_50.jpg') }}" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Văn Hùng</h5>
                                <p>Tuổi : 23 !</p>
                                <p>Tính cách : Vui tính, năng động, sáng tạo ^^</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Nguyễn Văn Hùng</h4>
                        <span>Phó Nhóm</span>
                    </figure>
                    <!-- end single member -->
                    
                    <!-- single member -->
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="member-thumb">
                            <img style="width: 265px;height: 390px;" src="{{ asset('img/logo_49.jpg') }}" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Văn Tú</h5>
                                <p>Tuổi : 19 !</p>
                                <p>Tính cách : Siêu hướng nội, mê gái , hay ăn ^^</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Trần Văn Tú</h4>
                        <span>Thành Viên</span>
                    </figure>
                    <!-- end single member -->
                    
                </div>
            </div>
        </section>
        
        <!--
        End Meet Our Team
        ==================================== -->
        
        <!--
        Statistics
        ==================================== -->        
        
        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                    <div class="row number-counters">
                        
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2>Số Liệu Thống Kê</h2>
                            <div class="devider"><img src="{{ asset('img/logo_44.jpg') }}"></div>
                        </div>
                        
                        <!-- first count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="counters-item">
                                <i class="fa fa-clock fa-3x"></i>
                                <strong data-to="20">0</strong>
                                
                                <p>Thời Trang Xưa</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item">
                                <i class="fa fa-users fa-3x"></i>
                                <strong data-to="25">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Thời Trang Hiện Đại</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item">
                                <i class="fa fa-rocket fa-3x"></i>
                                <strong data-to="5000">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p> Các Thành Viên </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item">
                                <i class="fa fa-trophy fa-3x"></i>
                                <strong data-to="1">13000</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Người Đăng Ký</p>
                            </div>
                        </div>
                        <!-- end first count item -->
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        End Statistics
        ==================================== -->
        
        
        <!--
        Contact Us
        ==================================== -->        
        
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mb50">
                    
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2>Liên Hệ</h2>
                        <div class="devider"><img src="{{ asset('img/logo_44.jpg') }}"></div>
                    </div>
                    
                    <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                        <p>Nghê phản hồi từ bạn là niềm vui của chúng tôi , vui lòng liên hệ với chúng tôi nếu bạn cần bất kỳ câu hỏi nào ^^</p>
                    </div>
                    
                    <!-- Contact -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                        <div class="contact-address">
                            <h3><font face="Comic sans MS">Thông Tin Liên Lạc</font></h3>
                            <p><font face="Comic sans MS">0968.710.535</font></p>
                            <p><font face="Comic sans MS">https://www.facebook.com/truonggiang/</font></p>
                            <p><font face="Comic sans MS">crystalboutique99@gmail.com</font></p>
                            <p><font face="Comic sans MS">Hà Nội, Việt Nam</font></p>
                        </div>
                    </div>
                    <!-- end contact address -->
                    
                    <!-- contact form -->
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="contact-form">
                            <h3><font face="Comic sans MS">Gửi tin nhắn cho chúng tôi</font></h3>
                            {{-- If send mail success --}}
                            @if($message = Session::get('success'))
                            <script type="text/javascript">
                                alert('{{$message}}');
                            </script>
                            @endif
                            <form action="{{ url('/sendemail') }}" method="POST" id="contact-form">
                                {{ csrf_field() }}
                                <div class="input-group name-email">
                                    <div class="input-field">
                                        <input type="text" name="name" id="name" placeholder="Your Name" class="form-control">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="email" id="email" required placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="subject" name="subject" id="subject" placeholder="Subject" class="form-control">
                                </div>
                                <div class="input-group">
                                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                                </div>
                                <div class="input-group">
                                    <input type="submit" name="send" id="form-submit" class="pull-right" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end contact form -->
                    
                    <!-- footer social links -->
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <ul class="footer-social">
                            
                            <li><a href="https://Myclass.vn"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="https://myclass.vn/"><i class="fab fa-dribbble fa-2x"></i></a></li>
                            <li><a href="https://www.facebook.com/lophocviet"><i class="fab fa-facebook fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <!-- end footer social links -->
                    
                </div>
            </div>
            
            <!-- Google map -->
            <!-- <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> -->
            <!-- End Google map -->
            
        </section>
        
        <!--
        End Contact Us
        ==================================== -->
        
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="footer-single">
                            FashionShop
                            <p>Nơi bạn có thể mua bất kỳ thời trang nào bạn thích !</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Theo Dõi </h6>
                            <form action="#" class="subscribe">
                                <input type="text" name="subscribe" id="subscribe">
                                <input type="submit" value="&#8594;" id="subs">
                            </form>
                            <p>FashionShop</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="footer-single">
                            <h6>Mạng xã hội</h6>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Flickr</a></li>
                                <li><a href="#">Google</a></li>
                                <li><a href="#">Forum</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="footer-single">
                            <h6>Ủng Hộ</h6>
                            <ul>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Thông tin</a></li>
                                <li><a href="#">Teamviewer</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="copyright text-center">
                                Copyright © 2018 by <a href="https://github.com/v10dynamite/eProjectggwp">Mr.nonDAFUg</a>. Beautiful Fashion at <a href="#">CrystalBoutique!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            
            <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
  <!--          <footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 footer-info">
                                <h3>BizPage</h3>
                                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                                    <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                                    <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h4>Contact Us</h4>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>

                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>

                            <div class="col-lg-3 col-md-6 footer-newsletter">
                                <h4>Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit"  value="Subscribe">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
  </div>
</div>
</footer><!-- #footer -->

<!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->

        <!-- Essential jQuery Plugins
            ================================================== -->
            <!-- Main jQuery -->
            <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
            <!-- Single Page Nav -->
            <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
            <!-- Twitter Bootstrap -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <!-- jquery.fancybox.pack -->
            <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
            <!-- jquery.mixitup.min -->
            <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
            <!-- jquery.parallax -->
            <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
            <!-- jquery.countTo -->
            <script src="{{ asset('js/jquery-countTo.js') }}"></script>
            <!-- jquery.appear -->
            <script src="{{ asset('js/jquery.appear.js') }}"></script>
            <!-- Contact form validation -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
            <!-- Google Map -->
            <!--  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
            <!-- jquery easing -->
            <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
            <!-- jquery easing -->
            <script src="{{ asset('js/wow.min.js') }}"></script>
            <!-- Custom Functions -->
            <script src="{{ asset('js/custom.js') }}"></script>
        </body>
        </html>
