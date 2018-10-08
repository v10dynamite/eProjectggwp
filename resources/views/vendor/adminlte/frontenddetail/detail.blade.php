@extends('adminlte::layouts.landing')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.productdetail') }}
@endsection

@section('productdetail')

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

		<div class="container-fluid" style="min-height: 15vh;">
			@if(isset($product))
				<div class="row">
					<div class="col-md-4">
						<div id="zoom-thumbnail">
							<img src="{{ $product->thumbnail }}" alt="{{ $product->title }}" class="img-responsive img-thumbnail" id="product-thumbnail">
						</div>
					</div>
					<div class="col-md-5">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div id="product-title-id">
									{{ $product->title }} mã {{ $product->productid }}
								</div>
								<form autocomplete="off">
									<span id="product-price">
										${{ $product->price }}
										<input type="hidden" name="thumbnail" id="thumbnail" value="{{ $product->thumbnail }}">
										<input type="hidden" name="productid" id="productid" value="{{ $product->productid }}">
										<input type="hidden" name="price" id="price" value="{{ $product->price }}">
										<input type="number" name="quantity" id="quantity" placeholder="Quantity" class="form-control" min="1" max="{{ $product->quantity }}" onkeydown="return false">
										{{-- <input type="hidden" name="total" id="total"> --}}
										<button type="submit" id="btnAddtocart" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
									</span>
								</form>
							</div>
							<div class="panel-body">
								<h3>Thông tin sản phẩm</h3><br>
								<div id="product-description-detail">
									{!! $product->description_detail !!}
								</div> <hr>
								<h3>Chính sách bán hàng</h3><br>
								<p><span class="fa fa-truck" style="color: #ECA000;"></span> &nbsp;&nbsp;Miễn phí giao hàng toàn quốc đơn hàng từ <span style="color: red;">$50.00</span></p>
								<p><span class="fa fa-truck" style="color: #ECA000;"></span> &nbsp;&nbsp;Miễn phí giao hàng toàn quốc khách VIP</p>
								<p><span class="glyphicon glyphicon-refresh" style="color: #ECA000;"></span> &nbsp;&nbsp;Đổi hàng miễn phí trong vòng 3 ngày (chỉ áp dụng với hàng nguyên giá)</p>
							</div>
						</div>
						
					</div>
				</div>
			@else
				<script type="text/javascript">
					alert('404 page not found, please go back!');
				</script>
				<h1 style="color: red;">404 PAGE NOT FOUND</h1>
			@endif
		</div>

	</div>
</div>

@endsection