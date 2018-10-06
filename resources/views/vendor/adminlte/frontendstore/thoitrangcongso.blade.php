@extends('adminlte::layouts.landing')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.homefrontend') }}
@endsection



@section('store-content')

<div class="parallax">
	<div class="container-fluid">
		<div class="navbar navbar-default" id="nav2" role="navigation">
			<div class="container" style="text-align: center;">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangcongso') }}">THỜI TRANG CÔNG SỞ</a></li>
					<li class="nav-item"><a class="page-scroll" href="#">THỜI TRANG TRẺ</a></li>
					<li class="nav-item"><a class="page-scroll" href="#">MẸ VÀ BÉ</a></li>
					<li class="nav-item"><a href="#">GIỎ HÀNG</a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<h4 style="margin-bottom: 10px;">THỜI TRANG <span style="color: #E48F21;">CÔNG SỞ</span></h4>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="">TẤT CẢ</a></li>
						<li><a href="#">ĐẦM NỮ</a></li>
						<li><a href="#">ÁO NỮ</a></li>
						<li><a href="#">QUẦN NỮ</a></li>
						<li><a href="#">CHÂN VÁY</a></li>
						<li><a href="#">BỘ LIỀN</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<p>
						<div class="panel panel-default" style="margin-top: 15px;">
							<div class="panel-heading">
								<h3>THỜI TRANG CÔNG SỞ</h3>
							</div>
						</div> <hr>
						<div class="panel panel-default" style="margin-top: 15px;">
							<div class="panel-heading">
								<h4>Hiện có <span style="color: red;">130</span> sản phẩm</h4>
							</div>
						</div>
					</p>
					<br>
					<div class="project-wrapper col-sm-12">
						<figure class="mix work-item action multiplayer">
							<div class="testimg"><img style="width: 266px;height: 396px;" src="img/logo_24.jpg" alt="lO" class="gamelist"></div>
							<figcaption class="overlay simpleCart_shelfItem">
								<a class="gamedetail"  title="Detail" href="#">Chi Tiết</a>
								<h4>Mã C1803L01</h4>
								<p>Năng động , ngày mới vui vẻ ... </p>
								<div class="pricelist"><span id="price">$24.00</span><img src="img/icon-windown.png" alt=""> <img src="img/icon-apple.png" alt=""> <img src="img/icon-xbox_0.png" alt=""></div>
								<a class="item_add" href="#"><span class="item_price" style="display: none;">$24.00</span><button id="addtocart">Mua hàng </button></a>
							</figcaption>
						</figure>
					</div>
					<center>
						<div class="container">
							<ul class="pagination">
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							</ul>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection