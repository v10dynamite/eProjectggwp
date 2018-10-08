@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Edit gallery
@endsection

@section('galleryEdit')
	<div class="container">
		<div class="box box-solid box-danger">
			<div class="box-header">Edit Gallery</div>
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
				<form action="{{ action('GalleryController@update', $id) }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="categoryid">Category ID</label>
						<select name="categoryid" id="categoryid" class="form-control">
	  						@foreach($category as $row)
	  							<option @if($row['categoryid'] == $gallery->categoryid) selected @endif value="{{ $row['categoryid'] }}">{{ $row['categoryid'] }}</option>
	  						@endforeach
	  					</select>
					</div>
					<div class="form-group">
						<label for="thumbnail">Thumbnail</label>
						<input type="file" name="thumbnail" id="thumbnail" value="{{ $gallery->thumbnail }}" class="form-control">
						<img id="thumbnail_show" src="{{ $gallery->thumbnail }}" alt="Thumbnail show after choose file" class="img-thumbnail img-responsive" width="300">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" name="description" value="{{ $gallery->description }}" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Save" class="btn btn-success">
						<a href="{{ url('gallery') }}" class="btn btn-warning">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection