<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->toArray();
        return view('adminlte::product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::product.create');
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
            'title' => 'required|min:1|max:16',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'description' => 'required'
        ],[
            'title.required' => 'not null',
            'title.min' =>' title can lon hon 1',
            'title.max' =>' title can nho hon 16',
        ]
        );

        $product = new Product();
        $input = $request->all();
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image->move(public_path('img'), $image->getClientOriginalName());
            $image_url = asset('img').'/'.$image->getClientOriginalName();
        }
        $product->title = $input['title'];
        $product->thumbnail = $image_url;
        $product->price = $input['price'];
        $product->description = $input['description'];
        $product->save();
        return redirect()->route('product.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('adminlte::product.edit', compact('product', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'description' => 'required'
        ]);
        $product = Product::find($id);
        $input = $request->all();
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image->move(public_path('img'), $image->getClientOriginalName());
            $image_url = asset('img').'/'.$image->getClientOriginalName();
        }
        $product->title = $input['title'];
        $product->thumbnail = $image_url;
        $product->price = $input['price'];
        $product->description = $input['description'];
        $product->save();
        return redirect()->route('product.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Data Removed');
    }
}
