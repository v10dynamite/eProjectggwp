@extends('adminlte::layouts.landing')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.cart') }}
@endsection

@section('cart')

<div class="parallax">
	<div class="container-fluid">
		<div class="navbar navbar-default" role="navigation">
			<div class="container" style="text-align: center;">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangcongso') }}">THỜI TRANG CÔNG SỞ</a></li>
					<li class="nav-item"><a class="page-scroll" href="{{ route('thoitrangtre') }}">THỜI TRANG TRẺ</a></li>
					<li class="nav-item"><a class="page-scroll" href="{{ route('mevabe') }}">MẸ VÀ BÉ</a></li>
					<li class="nav-item"><a href="{{ route('cart') }}">GIỎ HÀNG</a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid" style="min-height: 15vh;">
			<div class="panel panel-primary" style="opacity: 0.92;">
				<div class="panel-heading"><span class="fa fa-shopping-cart"></span> <b>GIỎ HÀNG CỦA BẠN</b></div>
				<div class="panel-body">
					<table class="table table-responsive table-bordered table-hover">
						<thead>
							<th>No</th>
							<th>Thumbnail</th>
							<th>Item ID</th>
							<th>Price ($)</th>
							<th>Quantity</th>
							<th>Total ($)</th>
							<th>Remove Item</th>
						</thead>
						<tbody id="cartResult"></tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection