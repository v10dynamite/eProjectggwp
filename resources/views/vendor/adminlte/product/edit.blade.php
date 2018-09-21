@extends('adminlte::layouts.app')

@section('productEdit')
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
				<form action="{{ action('ProductController@update', $id) }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" value="{{ $product->title }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="thumbnail">Thumbnail</label>
						<input type="text" name="thumbnail" value="{{ $product->thumbnail }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="price">Price</label>
						<input type="text" name="price" value="{{ $product->price }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" name="description" value="{{ $product->description }}" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Save" class="btn btn-success">
						<a href="{{ url('product') }}" class="btn btn-warning">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection