<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//from ajaxdata.blade.php
		$('#myTable').DataTable(//{
			// "processing": true,
			// "serverSide": true,
			// "ajax": "{! route('ajaxdata.getdata') !!}",
			// "columns":[
			// 	{ "data": "id" },
			// 	{ "data": "title" },
			// 	{ "data": "thumbnail", "width":200,
			// 		"render": function (data, type, full, meta) {
			// 			return '<img src="'+data+'" alt="'+data+'" class="img-thumbnail img-responsive" style="width: 100%;" />';
			// 		}
			// 	},
			// 	{ "data": "price" },
			// 	{ "data": "description" },
			// 	{ "data": "created_at" },
			// 	{ "data": "updated_at" }
			// ]
		//}
		);
		// //When modal pop up
		// $('#add_product').click(function () {
		// 	$('#productModal').modal('show');
		// 	$('#product_form')[0].reset();
		// 	$('#form_output').html('');
		// 	$('#button_action').val('insert');
		// 	$('#action').val('Add');
		// });
		// //when click Add(submit) button
		// $('#product_form').submit(function (event) {
		// 	event.preventDefault();
		// 	var form_data = $(this).serialize();
		// 	$.ajaxSetup({
		// 		headers: {
		// 			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 		}
		// 	});
		// 	$.ajax({
		// 		url: "{{ route('ajaxdata.postdata') }}",
		// 		method: "POST",
		// 		data: form_data,
		// 		dataType: "json",
		// 		// contentType: false,
		// 		// cache: false,
		// 		// processData: false,
		// 		success:function (data) {
		// 			if (data.error.length > 0) {
		// 				var error_html = '';
		// 				for (var i = 0; i < data.error.length; i++) {
		// 					error_html += '<div class="alert alert-danger">'+data.error[i]+'</div>';
		// 				}
		// 				$('#form_output').html(error_html);
		// 			} else {
		// 				$('#form_output').html(data.success);
		// 				$('#product_form')[0].reset();
		// 				$('#action').val('Add');
		// 				$('.modal-title').text('Add Product');
		// 				$('#button_action').val('insert');
		// 				$('#myTable').DataTable().ajax.reload();
		// 			}
		// 		}
		// 	})
		// });
		//END AJAX INSERT

		/** add active class and stay opened when selected */
		var url = window.location;
		// for sidebar menu entirely but not cover treeview
		$('ul.sidebar-menu a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');
		// for treeview
		$('ul.treeview-menu a').filter(function() {
			return this.href == url;
		}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

		//delete form confirmation from adminlte::product.index
		$("[name=delete_form]").submit(function () {
			if (confirm('Confirm deletion?')) {
				return true;
			} else {
				return false;
			}
		});
	});
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
?>