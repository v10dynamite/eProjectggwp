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
					<li class="nav-item"><a href="{{ route('cart.create') }}">GIỎ HÀNG</a></li>
				</ul>
			</div>
		</div>

		<div class="container-fluid" style="min-height: 15vh;">
			<div class="panel panel-primary">
				<div class="panel-heading"><span class="fa fa-shopping-cart"></span> <b>GIỎ HÀNG CỦA BẠN</b></div>
				<div class="panel-body" style="overflow-x: auto;">
					<table class="table table-bordered table-hover" id="cartTable">
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
					<div class="pull-left">
						<a href="{{ route('cart.create') }}" class="btn btn-success"><span class="	glyphicon glyphicon-refresh"></span> Update the cart</a>
					</div>
					<div id="total" class="pull-right"></div>
				</div>
			</div>

		</div>
		<div class="container">
			<div class="panel panel-info" style="opacity: 0.92;">
				<div class="panel-heading"><span class="fa fa-shopping-cart"></span> <b>THÔNG TIN GIAO DỊCH</b></div>
				<div class="panel-body">
					<form action="{{ url('cart') }}" method="POST" id="cartForm">
						{{ csrf_field() }}
						<input type="hidden" name="cartTotal" id="cartTotal"> {{-- Set total for input value from localstorage --}}
						<div class="form-group">
							<label for="name">Fullname</label>
							<input type="text" name="name" id="name" placeholder="Your Fullname" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="phone">Phone Number</label>
							<input type="text" name="phone" id="phone" placeholder="Your Phone Number" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" placeholder="Your receipt email" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<input type="address" name="address" id="address" placeholder="Number of house, street name, ward, commune, district, city" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="submit" value="Proceed Payment" class="btn btn-danger">
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

@if(count($errors) > 0)
	<script type="text/javascript">
		alert('Your cart is empty!');
	</script>					
@endif

@endsection