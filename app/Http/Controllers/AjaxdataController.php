<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DataTables;

class AjaxdataController extends Controller
{
    function index()
    {
    	return view('adminlte::product.ajaxdata');
    }

    function getdata()
    {
    	$products = Product::select('id', 'title', 'thumbnail', 'price', 'description', 'created_at', 'updated_at');
    	return DataTables::of($products)->make(true);
    }

    function postdata(Request $request)
    {
    	$validation = Validator::make($request->all(), [
    		'title' => 'required',
    		'thumbnail' => 'required',
    		'price' => 'required',
    		'description' => 'required',
    	]);

    	$error_array = [];
    	$success_output = '';
    	if ($validation->fails()) {
    		foreach ($validation->messages()->getMessages() as $field_name => $messages) {
    			$error_array[] = $messages;
    		}
    	} else {
    		if ($request->get('button_action') == 'insert') {
    			$product = new Product([
    				'title' => $request->get('title'),
    				'thumbnail' => $request->get('thumbnail'),
    				'price' => $request->get('price'),
    				'description' => $request->get('description'),
    			]);
    			$product->save();
    			$success_output = '<div class="alert alert-success">Product Inserted</div>';
    		}
    	}
    	$output = array(
    		'error' => $error_array,
    		'success' => $success_output,
    	);
    	echo json_encode($output);
    }
}
?>