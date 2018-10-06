@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Input Category
@endsection

@section('categoriesForm')
	<div class="container">
	  	<div class="box box-solid box-danger">
	  		<div class="box-header">Add Category</div>
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
	  			<form action="{{ url('category') }}" method="POST">
	  				{{ csrf_field() }}
	  				<div class="form-group">
	  					<label for="categorygroup_id">Category Group ID</label>
	  					<select name="categorygroup_id" id="categorygroup_id" class="form-control">
	  						<option value="CG1">CG1</option>
	  						<option value="CG2">CG2</option>
	  						<option value="CG3">CG3</option>
	  					</select>
	  				</div>
	  				<div class="form-group">
	  					<label for="categoryid">Category ID</label>
	  					<input type="text" name="categoryid" id="categoryid" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="categoryname">Category Name</label>
	  					<input type="text" name="categoryname" id="categoryname" class="form-control">
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