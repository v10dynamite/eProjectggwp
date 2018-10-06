@extends('adminlte::layouts.landing')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.thoitrangtre-quannu') }}
@endsection



@section('thoitrangtre-quannu')

<div class="parallax">
	<div class="container-fluid">
		<div class="navbar navbar-default" role="navigation">
			<div class="container" style="text-align: center;">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangcongso') }}">THỜI TRANG CÔNG SỞ</a></li>
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangtre') }}">THỜI TRANG TRẺ</a></li>
					<li class="nav-item"><a class="page-scroll" href="{{ route('mevabe') }}">MẸ VÀ BÉ</a></li>
					<li class="nav-item"><a href="#">GIỎ HÀNG</a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<h4 style="margin-bottom: 10px;">THỜI TRANG <span style="color: #E48F21;">TRẺ</span></h4>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="{{ route('thoitrangtre') }}">TẤT CẢ</a></li>
						<li><a href="{{ route('thoitrangtredamnu') }}">ĐẦM NỮ</a></li>
						<li><a href="{{ route('thoitrangtreaonu') }}">ÁO NỮ</a></li>
						<li class="active"><a href="{{ route('thoitrangtrequannu') }}">QUẦN NỮ</a></li>
						<li><a href="{{ route('thoitrangtrechanvay') }}">CHÂN VÁY</a></li>
						<li><a href="{{ route('thoitrangtrebolien') }}">BỘ LIỀN</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<p>
						<div class="panel panel-default" style="margin-top: 15px;">
							<div class="panel-heading">
								<h3>THỜI TRANG TRẺ</h3>
							</div>
						</div> <hr>
						<div class="panel panel-default" style="margin-top: 15px;">
							<div class="panel-heading">
								<h4>Hiện có <span style="color: red;">
									@php 
										$count = 0;
										if (!empty($products)) {
											foreach ($products as $row) {
												$count++;
											}
										}
										echo $count;
									@endphp</span> sản phẩm</h4>
							</div>
						</div>
					</p>
					<br>
					<div class="project-wrapper col-sm-12">
						@if(!empty($products))
							@foreach($products as $product)
								<figure class="mix work-item action multiplayer">
									<div class="testimg"><img style="width: 266px;height: 396px;" src="{{ $product->thumbnail }}" alt="{{ $product->title }}" class="gamelist"></div>
									<figcaption class="overlay simpleCart_shelfItem">
										<a class="gamedetail"  title="Detail" href="#">Chi Tiết</a>
										<h4>Mã: {{ $product->productid }}</h4>
										<p>{{ $product->description }}</p>
										<div class="pricelist"><span id="price">${{ $product->price }}</span><img src="img/icon-windown.png" alt=""> <img src="img/icon-apple.png" alt=""> <img src="img/icon-xbox_0.png" alt=""></div>
										<a class="item_add" href="#"><span class="item_price" style="display: none;">${{ $product->price }}</span><button id="addtocart">Giỏ hàng </button></a>
									</figcaption>
								</figure>
							@endforeach
						@endif

					</div>
					<center>
						@if(!empty($products))
							{{ $products->links() }}
						@endif
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection