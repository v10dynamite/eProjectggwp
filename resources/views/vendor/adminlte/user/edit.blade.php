@extends('adminlte::layouts.app')

@section('userEdit')
	<div class="container">
		<div class="box box-solid box-danger">
			<div class="box-header">Edit Admin</div>
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
				<form action="{{ action('UserController@update', $id) }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="name">Fullname</label>
						<input type="text" name="name" value="{{ $user->name }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="birthday">Birthday</label>
						<input type="date" name="birthday" value="{{ $user->birthday }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="gender">Gender</label>
						<select name="gender" class="form-control">
							<option value="Male" @if($user->gender == 'Male') selected @endif>Male</option>
							<option value="Female" @if($user->gender == 'Female') selected @endif>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="address" value="{{ $user->address }}" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Save" class="btn btn-success">
						<a href="{{ url('user') }}" class="btn btn-warning">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection