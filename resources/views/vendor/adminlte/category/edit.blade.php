@extends('adminlte::layouts.app')

@section('categoryEdit')
	<div class="container">
		<div class="box box-solid box-danger">
			<div class="box-header">Edit Category</div>
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
				<form action="{{ action('CategoryController@update', $categoryid) }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="categoryid">Category ID</label>
						<input type="text" name="categoryid" value="{{ $category->categoryid }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="categoryname">Category Name</label>
						<input type="text" name="categoryname" value="{{ $category->categoryname }}" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Save" class="btn btn-success">
						<a href="{{ url('category') }}" class="btn btn-warning">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection