@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Customer's detail items
@endsection

@section('detailcart')
	<div class="container">
		<div class="box box-solid box-info">
			<div class="box-header with-border">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<div class="box-title">Customer Ordered List</div>
			</div>
			<div class="box-body">
				<h4>Order ID: {{ $customer['ordering_id'] }}</h4>
				<h4>Customer: {{ $customer['name'] }}</h4>
				<table name="myTable" class="table table-bordered table-hover">
					<thead>
						<th>No</th>
						<th>Product ID</th>
						<th>Thumbnail</th>
						<th>Quantity</th>
						<th>Sub total</th>
					</thead>
					<tbody>
						@php
							$count = 1;
						@endphp
						@foreach($cartdetail as $row)
							<tr>
								<td>{{ $count++ }}</td>
								<td>{{ $row->productid }}</td>
								<td style="width: 15%;"><img src="{{ $row->thumbnail }}" alt="{{ $row->productid }}" class="img-responsive img-thumbnail"></td>
								<td>{{ $row->quantity }}</td>
								<td>{{ $row->subtotal }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection