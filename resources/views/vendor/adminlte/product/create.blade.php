@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Input product
@endsection

@section('productsForm')
	<div class="container">
	  	<div class="box box-solid box-danger">
	  		<div class="box-header">Add Products</div>
	  		<div class="box-body">
	  			@if(count($errors) > 0)
	  				<div class="alert alert-danger">
	  					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  					<ul>
		  					@foreach($errors->all() as $error)
		  						<li>{{ $error }}</li>
		  					@endforeach
	  					</ul>
	  				</div>
	  			@endif
	  			@if(\Session::has('success'))
	  				<div class="alert alert-success">
	  					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  					<ul>
	  						<li>{{ \Session::get('success') }}</li>
	  					</ul>
	  				</div>
	  			@endif
	  			<form action="{{ url('product') }}" method="POST">
	  				{{ csrf_field() }}
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
	  				<div class="form-group">
	  					<input type="submit" value="Add" class="btn btn-success">
	  					<input type="reset" value="Reset" class="btn btn-warning">
	  				</div>
	  			</form>
	  		</div>
	  	</div>
	</div>
@endsection