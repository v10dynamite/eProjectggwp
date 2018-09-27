@extends('adminlte::layouts.app')

@section('htmlheader_title')
	List of Categories
@endsection

@section('categoriesList')
{{-- <div class="overlay">
    <i class="fa fa-refresh fa-spin"></i> //fontawesome test success, can put dis into class .box
</div> --}}
<div class="container-fluid">
	<!-- DataTables Example -->
	<div class="box box-solid box-primary">
		<div class="box-header with-border">
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			<div class="box-title">List of Categories</div>
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
				<table id="myTable" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Category ID</th>
							<th>Category Name</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Category ID</th>
							<th>Category Name</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
					</tfoot>
					<tbody>
						@php
							$count = 1;
						@endphp
						@foreach($categories as $row)
							<tr>
								<td>{{ $count++ }}</td>
								<td>{{ $row['categoryid'] }}</td>
								<td>{{ $row['categoryname'] }}</td>
								<td>{{ $row['created_at'] }}</td>
								<td>{{ $row['updated_at'] }}</td>
								<td>
									<form name="delete_form" action="{{ action('CategoryController@destroy', $row['categoryid']) }}" method="POST">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
									</form>
								</td> 
								<td>
									<a href="{{ action('CategoryController@edit', $row['categoryid']) }}" class="btn btn-info">
										<span class="glyphicon glyphicon-cog"></span>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="panel-footer small text-muted">Updated yesterday at 11:59 PM</div>
	</div>

	<p class="small text-center text-muted">
		<em>More products coming soon...</em>
	</p>

</div>
@endsection