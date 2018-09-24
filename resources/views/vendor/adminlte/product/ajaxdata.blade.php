@extends('adminlte::layouts.app')

@section('ajaxall')
	<div class="container-fluid">
		<!-- DataTables Example -->
		<div class="box box-solid box-primary">
			<div class="box-header with-border">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<div class="box-title">List of Products</div>
				<button name="add" id="add_product" class="btn btn-sm btn-success pull-right">Add Product</button>
			</div>
			<div class="box-body">
				{{-- @if(\Session::has('success'))
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<ul>
							<li>{{ \Session::get('success') }}</li>
						</ul>
					</div>
					@endif --}}
				<div class="table-responsive">
					<table id="myTable" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>Thumbnail</th>
								<th>Price</th>
								<th>Description</th>
								<th>Created At</th>
								<th>Updated At</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>Thumbnail</th>
								<th>Price</th>
								<th>Description</th>
								<th>Created At</th>
								<th>Updated At</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="panel-footer small text-muted">Updated yesterday at 11:59 PM</div>
		</div>

		<p class="small text-center text-muted">
			<em>More products coming soon...</em>
		</p>
		
		<div id="productModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="product_form" method="POST" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add Product</h4>
						</div>
						<div class="modal-body">
							{{ csrf_field() }}
							<span id="form_output"></span>
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" id="title" class="form-control">
							</div>
							<div class="form-group">
								<label for="thumbnail">Thumbnail</label>
								<input type="text" name="thumbnail" id="thumbnail" class="form-control">
							</div>
							<div class="form-group">
								<label for="price">Price</label>
								<input type="text" name="price" id="price" class="form-control">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input type="text" name="description" id="description" class="form-control">
							</div>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="button_action" id="button_action" value="insert">
							<input type="submit" name="submit" id="action" value="Add" class="btn btn-info">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection