@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.customerordered') }}
@endsection

@section('customerordered')

<div class="container-fluid">
	<!-- DataTables Example -->
	<div class="box box-solid box-primary">
		<div class="box-header with-border">
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			<div class="box-title">Customer Ordered List</div>
		</div>
		<div class="box-body">
			@if(\Session::has('success'))
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert" aria-label="close">&times;</button>
					<ul>
						<li>{{ \Session::get('success') }}</li>
					</ul>
				</div>
			@endif
			<div class="table-responsive">
				<table name="myTable" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Ordering ID</th>
							<th>Customer Name</th>
							<th>Customer Phone Number</th>
							<th>Customer Email</th>
							<th>Customer Address</th>
							<th>Total ($)</th>
							<th>Updated At</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Ordering ID</th>
							<th>Customer Name</th>
							<th>Customer Phone Number</th>
							<th>Customer Email</th>
							<th>Customer Address</th>
							<th>Total ($)</th>
							<th>Updated At</th>
							<th>Delete</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($customers as $row)
							<tr>
								<td>{{ $row['ordering_id'] }}</td>
								<td>{{ $row['name'] }}</td>
								<td>{{ $row['phone'] }}</td>
								<td>{{ $row['email'] }}</td>
								<td>{{ $row['address'] }}</td>
								<td>{{ $row['cartTotal'] }}</td>
								<td>{{ $row['updated_at'] }}</td>
								<td>
									<form name="delete_form" action="{{ action('CartController@destroy', $row['ordering_id']) }}" method="POST">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@if(count($latest_update)>0)
			<div class="panel-footer small text-muted">Last updated at {{ $latest_update[0]['updated_at'] }}</div>
		@else
			<div class="panel-footer small text-muted">Last updated at</div>
		@endif
	</div>

	<p class="small text-center text-muted">
		<em>More order coming soon...^^</em>
	</p>

@endsection