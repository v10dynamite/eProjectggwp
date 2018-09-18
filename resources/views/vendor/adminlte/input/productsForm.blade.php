@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Input product
@endsection

@section('productsForm')
	<!-- Construct the box with style you want. Here we are using box-danger -->
	<!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
	<!-- The contextual class should match the box, so we are using direct-chat-danger -->
	<div class="box box-warning direct-chat direct-chat-warning">
		<div class="box-header with-border">
			<h3 class="box-title">Direct Chat</h3>
			<div class="box-tools pull-right">
				<span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<!-- In box-tools add this button if you intend to use the contacts pane -->
				<button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<!-- Conversations are loaded here -->
			<div class="direct-chat-messages">
				<!-- Message. Default to the left -->
				<div class="direct-chat-msg">
					<div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-left">Alexander Pierce</span>
						<span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
					</div><!-- /.direct-chat-info -->
					<img class="direct-chat-img" src="{{ asset('img/user1-128x128.jpg') }}" alt="message user image"><!-- /.direct-chat-img -->
					<div class="direct-chat-text">
						Is this template really for free? That's unbelievable!
					</div><!-- /.direct-chat-text -->
				</div><!-- /.direct-chat-msg -->

				<!-- Message to the right -->
				<div class="direct-chat-msg right">
					<div class="direct-chat-info clearfix">
						<span class="direct-chat-name pull-right">Sarah Bullock</span>
						<span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
					</div><!-- /.direct-chat-info -->
					<img class="direct-chat-img" src="{{ asset('img/user3-128x128.jpg') }}" alt="message user image"><!-- /.direct-chat-img -->
					<div class="direct-chat-text">
						You better believe it mutharfukqa!
					</div><!-- /.direct-chat-text -->
				</div><!-- /.direct-chat-msg -->
			</div><!--/.direct-chat-messages-->

			<!-- Contacts are loaded here -->
			<div class="direct-chat-contacts">
				<ul class="contacts-list">
					<li>
						<a href="#">
							<img class="contacts-list-img" src="{{ asset('img/user1-128x128.jpg') }}" alt="Contact Avatar">
							<div class="contacts-list-info">
								<span class="contacts-list-name">
									Count Dracula
									<small class="contacts-list-date pull-right">2/28/2015</small>
								</span>
								<span class="contacts-list-msg">How have you been? I was...</span>
							</div><!-- /.contacts-list-info -->
						</a>
					</li><!-- End Contact Item -->
				</ul><!-- /.contatcts-list -->
			</div><!-- /.direct-chat-pane -->
		</div><!-- /.box-body -->
		<div class="box-footer">
			<div class="input-group">
				<input type="text" name="message" placeholder="Type Message ..." class="form-control">
				<span class="input-group-btn">
					<button type="button" class="btn btn-warning btn-flat">Send</button>
				</span>
			</div>
		</div><!-- /.box-footer-->
	</div><!--/.direct-chat -->
      
	<div class="container">
	  	<div class="box box-solid box-danger">
	  		<div class="box-header">Add Products</div>
	  		<div class="box-body">
	  			<form action="" method="POST">
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