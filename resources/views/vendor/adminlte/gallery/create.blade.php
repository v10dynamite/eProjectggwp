@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Input gallery
@endsection

@section('galleriesForm')
	<div class="container">
	  	<div class="box box-solid box-danger">
	  		<div class="box-header">Add Galleries</div>
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
	  			@if(\Session::has('success'))
	  				<div class="alert alert-success">
	  					<button class="close" data-dismiss="alert" aria-label="close">&times;</button>
	  					<ul>
	  						<li>{{ \Session::get('success') }}</li>
	  					</ul>
	  				</div>
	  			@endif
	  			<form action="{{ url('gallery') }}" method="POST" enctype="multipart/form-data">
	  				{{ csrf_field() }}
	  				<div class="form-group">
	  					<label for="categoryid">Category ID</label>
	  					<select name="categoryid" id="categoryid" class="form-control">
	  						@foreach($category as $row)
	  							<option value="{{ $row['categoryid'] }}">{{ $row['categoryid'] }}</option>
	  						@endforeach
	  					</select>
	  				</div>
	  				<div class="form-group">
	  					<label for="thumbnail">Thumbnail</label>
	  					<input type="file" name="thumbnail" id="thumbnail" class="form-control">
	  					<img id="thumbnail_show" src="#" alt="Thumbnail show after choose file" class="img-thumbnail img-responsive" width="300">
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