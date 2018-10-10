@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Edit product
@endsection

@section('productEdit')
	<div class="container">
		<div class="box box-solid box-danger">
			<div class="box-header">Edit Product</div>
			<div class="box-body">
				@if(count($errors) > 0)
	  				<div class="alert alert-danger">
	  					<button class="close" data-dismiss="alert" aria-label="close">&times;</button>
	  					<strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
	  					<ul>
		  					@foreach($errors->all() as $error)
		  						<li>{{ $error }}</li>
		  					@endforeach
	  					</ul>
	  				</div>
	  			@endif
				<form action="{{ action('ProductController@update', $productid) }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="categoryid">Category ID</label>
						<select name="categoryid" id="categoryid" class="form-control">
	  						@foreach($category as $row)
	  							<option @if($row['categoryid'] == $product->categoryid) selected @endif value="{{ $row['categoryid'] }}">{{ $row['categoryid'] }}</option>
	  						@endforeach
	  					</select>
					</div>
					<div class="form-group">
						<label for="productid">Product ID</label>
						<input type="text" name="productid" value="{{ $product->productid }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" value="{{ $product->title }}" class="form-control">
					</div>
					{{-- <div class="form-group">
						<label for="thumbnail">Thumbnail</label>
						<input type="file" name="thumbnail" id="thumbnail" value="{{ $product->thumbnail }}" class="form-control">
						<img id="thumbnail_show" src="{{ $product->thumbnail }}" alt="Thumbnail show after choose file" class="img-thumbnail img-responsive" width="300">
					</div> --}}
					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control">
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
						<label for="description_detail">Detail Description</label>
						<textarea name="description_detail" id="summernote">{{ $product->description_detail }}</textarea>
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