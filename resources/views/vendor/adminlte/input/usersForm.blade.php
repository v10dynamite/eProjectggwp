@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Input user
@endsection

@section('usersForm')
	<div class="container">
	  	<div class="box box-solid box-danger">
	  		<div class="box-header">Add Users</div>
	  		<div class="box-body">
	  			<form action="{{ url('/register') }}" method="POST">
	  				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  				<div class="form-group">
	  					<label for="name">Fullname</label>
	  					<input type="text" name="name" id="name" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="password">Password</label>
	  					<input type="password" name="password" id="password" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="confirmpassword">Confirm Password</label>
	  					<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="usertype">User Type</label>
	  					<select id="usertype" class="form-control">
	  						<option value="Admin">Admin</option>
	  						<option value="User">User</option>
	  					</select>
	  				</div>
	  				<div class="form-group">
	  					<label for="email">Email</label>
	  					<input type="email" name="email" id="email" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="birthday">Birthday</label>
	  					<input type="date" name="birthday" id="birthday" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="gender">Gender</label>&nbsp;
	  					<input type="radio" name="gender" value="Male"> Male&nbsp;
	  					<input type="radio" name="gender" value="Female"> Female
	  				</div>
	  				<div class="form-group">
	  					<label for="address">Address</label>
	  					<input type="text" name="address" id="address" class="form-control">
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