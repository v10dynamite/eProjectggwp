@extends('adminlte::layouts.landing')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.thoitrangcongso-damnu') }}
@endsection



@section('thoitrangcongso-damnu')

<div class="parallax">
	<div class="container-fluid">
		<div class="navbar navbar-default" role="navigation">
			<div class="container" style="text-align: center;">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangcongso') }}">THỜI TRANG CÔNG SỞ</a></li>
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangtre') }}">THỜI TRANG TRẺ</a></li>
					<li class="nav-item"><a class="page-scroll" href="{{ route('mevabe') }}">MẸ VÀ BÉ</a></li>
					<li class="nav-item"><a href="{{ route('cart.create') }}">GIỎ HÀNG</a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<h4 style="margin-bottom: 10px;">THỜI TRANG <span style="color: #E48F21;">CÔNG SỞ</span></h4>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="{{ route('thoitrangcongso') }}">TẤT CẢ</a></li>
						<li><a href="{{ route('thoitrangcongsodamnu') }}">ĐẦM NỮ</a></li>
						<li><a href="{{ route('thoitrangcongsoaonu') }}">ÁO NỮ</a></li>
						<li class="active"><a href="{{ route('thoitrangcongsoquannu') }}">QUẦN NỮ</a></li>
						<li><a href="{{ route('thoitrangcongsochanvay') }}">CHÂN VÁY</a></li>
						<li><a href="{{ route('thoitrangcongsobolien') }}">BỘ LIỀN</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<p>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('thoitrangcongso') }}">THỜI TRANG CÔNG SỞ</a></li>
								<li class="breadcrumb-item active" aria-current="page">Quần nữ</li>
							</ol>
						</nav> <hr>
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
										<a class="gamedetail"  title="Detail" href="{{ action('ProductController@detail', $product->productid) }}">Chi Tiết</a>
										<h4>Mã: {{ $product->productid }}</h4>
										<p>{{ $product->description }}</p>
										<div class="pricelist"><span id="price">${{ $product->price }}</span><img src="{{ asset('img/icon-windown.png') }}" alt=""> <img src="{{ asset('img/icon-apple.png') }}" alt=""> <img src="{{ asset('img/icon-xbox_0.png') }}" alt=""></div>
										<a class="item_add" href="{{ action('ProductController@detail', $product->productid) }}"><span class="item_price" style="display: none;">${{ $product->price }}</span><button id="addtocart">Mua hàng </button></a>
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