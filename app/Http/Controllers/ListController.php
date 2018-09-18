<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function usersList(Request $request) {
        return view('adminlte::list.usersList');
    }

    public function productsList(Request $request) {
        return view('adminlte::list.productsList');
    }
}
