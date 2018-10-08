@extends('adminlte::layouts.landing')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.homefrontend') }}
@endsection


@section('home-content')

<section style="min-height: 80vh;" id="slider">
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
                    <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="{{ route('thoitrangcongso') }}"><span class="item_price" style="display: none;">$24.00</span><button id="addtocart" >To our store </button></a></div>


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
                    <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="{{ route('thoitrangcongso') }}"><span class="item_price" style="display: none;">$35.00</span><button id="addtocart" >To our store </button></a></div>
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
                    <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="{{ route('thoitrangcongso') }}"><span class="item_price" style="display: none;">$59.99</span><button id="addtocart" >To our store </button></a></div>
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
                    <div data-wow-duration="1000ms" class="wow slideInRight animated"><a class="item_add" href="{{ route('thoitrangcongso') }}"><span class="item_price" style="display: none;">$29.00</span><button id="addtocart" >To our store </button></a></div>
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
                            <li><a href="javascript:;" data-filter=".action" class="filter">Đầm Nữ</a></li>
                            <li><a href="javascript:;" data-filter=".adventure" class="filter">Áo Nữ</a></li>
                            <li><a href="javascript:;" data-filter=".casual" class="filter">Quần Nữ</a></li>
                            <li><a href="javascript:;" data-filter=".multiplayer" class="filter">Chân Váy</a></li>
                            <li><a href="javascript:;" data-filter=".RPG" class="filter">Bộ Liền</a></li>
                            <li><a href="javascript:;" data-filter=".sport" class="filter">Thời Trang Mẹ và Bé</a></li>
                        </ul>
                        <ul class="text-center">
                        	<li><a href="{{ route('thoitrangcongso') }}" class="filter">Tôi muốn mua sản phẩm của bộ sưu tập</a></li>
                        </ul>
                    </div>
                    
                </div>

                {{-- Showing item from Gallery --}}
                <div class="project-wrapper">

                    @foreach($damnu as $row)
                        <figure class="mix work-item action">
                            <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $row->thumbnail }}" alt="{{ $row->description }}" class="gamelist"></div>
                            <figcaption class="overlay simpleCart_shelfItem">
                                <div class="pricelist"><span style="font-weight: bold;">{{ $row->description }} </span></div>
                            </figcaption>
                        </figure>
                    @endforeach

                    @foreach($aonu as $row)
                        <figure class="mix work-item adventure">
                            <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $row->thumbnail }}" alt="{{ $row->description }}" class="gamelist"></div>
                            <figcaption class="overlay simpleCart_shelfItem">
                                <div class="pricelist"><span style="font-weight: bold;">{{ $row->description }} </span></div>
                            </figcaption>
                        </figure>
                    @endforeach

                    @foreach($quannu as $row)
                        <figure class="mix work-item casual">
                            <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $row->thumbnail }}" alt="{{ $row->description }}" class="gamelist"></div>
                            <figcaption class="overlay simpleCart_shelfItem">
                                <div class="pricelist"><span style="font-weight: bold;">{{ $row->description }} </span></div>
                            </figcaption>
                        </figure>
                    @endforeach

                    @foreach($chanvay as $row)
                        <figure class="mix work-item multiplayer">
                            <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $row->thumbnail }}" alt="{{ $row->description }}" class="gamelist"></div>
                            <figcaption class="overlay simpleCart_shelfItem">
                                <div class="pricelist"><span style="font-weight: bold;">{{ $row->description }} </span></div>
                            </figcaption>
                        </figure>
                    @endforeach

                    @foreach($bolien as $row)
                        <figure class="mix work-item RPG">
                            <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $row->thumbnail }}" alt="{{ $row->description }}" class="gamelist"></div>
                            <figcaption class="overlay simpleCart_shelfItem">
                                <div class="pricelist"><span style="font-weight: bold;">{{ $row->description }} </span></div>
                            </figcaption>
                        </figure>
                    @endforeach

                    @foreach($mevabe as $row)
                        <figure class="mix work-item sport">
                            <div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $row->thumbnail }}" alt="{{ $row->description }}" class="gamelist"></div>
                            <figcaption class="overlay simpleCart_shelfItem">
                                <div class="pricelist"><span style="font-weight: bold;">{{ $row->description }} </span></div>
                            </figcaption>
                        </figure>
                    @endforeach
                    
                </div> {{-- END Showing item from Gallery --}}

            </div> <!-- End container -->
        </section>
        
        <!--
        End Best Game
        ==================================== -->
        
        <!-- NEW GAME -->
        <section id="sales">
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
                                <p>Vui tính, thật thà, chăm chỉ ^^</p>
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
                                <p>Người bình thường ^^</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Ngô Huy Hoàng</h4>
                        <span>Thành Viên</span>
                    </figure>
                    <!-- end single member -->
                    
                    <!-- single member -->
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="member-thumb">
                            <img style="width: 265px;height: 390px;" src="{{ asset('img/logo_50.jpg') }}" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Văn Hùng</h5>
                                <p>Tuổi : 23 !</p>
                                <p>Vui tính, năng động, sáng tạo ^^</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fab fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Nguyễn Văn Hùng</h4>
                        <span>Thành Viên</span>
                    </figure>
                    <!-- end single member -->
                    
                    <!-- single member -->
                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="member-thumb">
                            <img style="width: 265px;height: 390px;" src="{{ asset('img/logo_49.jpg') }}" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Văn Tú</h5>
                                <p>Tuổi : 19 !</p>
                                <p>Đẹp trai, thông minh, vui tính ^^</p>
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
            <div style="min-height: 100vh;" class="parallax-overlay">
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
                        <p>Nghe phản hồi từ bạn là niềm vui của chúng tôi , vui lòng liên hệ với chúng tôi nếu bạn cần bất kỳ câu hỏi nào ^^</p>
                    </div>
                    
                    <!-- Contact -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                        <div class="contact-address">
                            <h3><font face="Comic sans MS">Thông Tin Liên Lạc</font></h3>
                            <p><font face="Comic sans MS">0968.710.535</font></p>
                            <p><font face="Comic sans MS">https://www.facebook.com/truonggiang/</font></p>
                            <p><font face="Comic sans MS">crystalboutique99@gmail.com</font></p>
                            <p><font face="Comic sans MS">Tòa nhà Aptech, 285 Đội Cấn, Liễu Giai, Ba Đình, Hà Nội</font></p>
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

        @endsection