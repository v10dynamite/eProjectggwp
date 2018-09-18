<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function usersForm(Request $request) {
        return view('adminlte::input.usersForm');
    }

    public function productsForm(Request $request) {
        return view('adminlte::input.productsForm');
    }
}
