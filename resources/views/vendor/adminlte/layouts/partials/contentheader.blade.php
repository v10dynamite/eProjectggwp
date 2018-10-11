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
				@elseif(Request::is('cart'))
					{{ trans('adminlte_lang::message.customerordered') }}
				@elseif(Request::is('cart/*/edit')) {{-- The "*" allows a pattern parameter --}}
					Order's detail
				@elseif(Request::is('user'))
					List Admins
				@elseif(Request::is('product/create'))
					Add Product
				@elseif(Request::is('product'))
					List Products
				@elseif(Request::is('category/create'))
					Add Category
				@elseif(Request::is('category'))
					List Categories
				@elseif(Request::is('gallery/create'))
					Add Gallery
				@elseif(Request::is('gallery'))
					List Gallery
				@else
					Updating...
				@endif
			</li>
		</ol>

        <small>@yield('contentheader_description')</small>
    </h1>
</section>