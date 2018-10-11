<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\CartDetail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Cart::all()->toArray();
        $latest_update = Cart::latest('updated_at')->get();
        return view('adminlte::cart.index', compact('customers', 'latest_update'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cartTotal' => 'required'
        ]);
        $cart = new Cart();
        $input = $request->all();
        $cart->name = $input['name'];
        $cart->phone = $input['phone'];
        $cart->email = $input['email'];
        $cart->address = $input['address'];
        $cart->cartTotal = $input['cartTotal'];
        $cart->cartdetail = $input['cartdetail'];
        $cart->save();
        return redirect()->route('cart.create')->with('success', 'Your order has been sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ordering_id)
    {
        //
    }

    
    public function edit($ordering_id)
    {
        $customer = Cart::find($ordering_id)->toArray();
        // var_dump($customer);
        // die();
        $obj = Cart::find($ordering_id, ['cartdetail']);
        $cartdetail = json_decode($obj->cartdetail);
        return view('adminlte::cart.edit', compact('customer','cartdetail'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ordering_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ordering_id)
    {
        $cart = Cart::find($ordering_id);
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Data Removed');
    }
}
