@extends('adminlte::layouts.app')

@section('htmlheader_title')
	List of Gallery
@endsection

@section('galleriesList')

<div class="container-fluid">

	<div class="box box-solid box-primary">
		<div class="box-header with-border">
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			<div class="box-title">List of Gallery</div>
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
							<th>NO</th>
							<th>Category ID</th>
							<th>Gallery ID</th>
							<th>Thumbnail</th>
							<th>Description</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>NO</th>
							<th>Category ID</th>
							<th>Gallery ID</th>
							<th>Thumbnail</th>
							<th>Description</th>
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
						@foreach($galleries as $row)
							<tr>
								<td>{{ $count++ }}</td>
								<td>{{ $row['categoryid'] }}</td>
								<td>{{ $row['id'] }}</td>
								<td style="width: 15%;"><img src="{{ $row['thumbnail'] }}" class="img-responsive img-thumbnail" alt="{{ $row['description'] }}" style="width: 100%;"></td>
								<td>{{ $row['description'] }}</td>
								<td>{{ $row['created_at'] }}</td>
								<td>{{ $row['updated_at'] }}</td>
								<td>
									<form name="delete_form" action="{{ action('GalleryController@destroy', $row['id']) }}" method="POST">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
									</form>
								</td>
								<td>
									<a href="{{ action('GalleryController@edit', $row['id']) }}" class="btn btn-info">
										<span class="glyphicon glyphicon-cog"></span>
									</a>
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
		<em>More galleries coming soon...</em>
	</p>

</div>
@endsection