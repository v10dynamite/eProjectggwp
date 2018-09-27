<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{-- @yield('contentheader_title', 'Header') --}}
        
          <!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('home') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">
				@if(Request::is('home'))
					Home
				@elseif(Request::is('usersForm'))
					Add Users
				@elseif(Request::is('usersList'))
					List Users
				@elseif(Request::is('product/create'))
					Add Product
				@elseif(Request::is('product'))
					List Products
				@elseif(Request::is('category/create'))
					Add Category
				@elseif(Request::is('category'))
					List Categories
				@else
					Updating...
				@endif
			</li>
		</ol>

        <small>@yield('contentheader_description')</small>
    </h1>
</section>