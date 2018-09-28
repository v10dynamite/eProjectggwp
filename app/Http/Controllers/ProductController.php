<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
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
        $latest_update = Product::latest('updated_at')->get();
        return view('adminlte::product.index', compact('products', 'latest_update'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('adminlte::product.create', compact('category'));
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
            'productid' => 'required|unique:products',
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
            'description_detail' => 'required'
        ], [
            // 'title.required' => 'not null',
            // 'title.min' =>' title can lon hon 1', // DAY LA PHAN RENAME VALIDATE
            // 'title.max' =>' title can nho hon 10',
        ]);
        $product = new Product();
        $input = $request->all();
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image->move(public_path('img'), $image->getClientOriginalName());
            $image_url = asset('img').'/'.$image->getClientOriginalName();
        }
        $product->categoryid = $input['categoryid'];
        $product->productid = $input['productid'];
        $product->title = $input['title'];
        $product->thumbnail = $image_url;
        $product->quantity = $input['quantity'];
        $product->price = $input['price'];
        $product->description = $input['description'];
        $product->description_detail = $input['description_detail'];
        $product->save();
        return redirect()->route('product.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($productid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($productid)
    {
        $product = Product::find($productid);
        $category = Category::all();
        return view('adminlte::product.edit', compact('product', 'productid', 'category'))->with('categoryid');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productid)
    {
        $this->validate($request, [
            'productid' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
            'description_detail' => 'required'
        ]);
        $product = Product::find($productid);
        $input = $request->all();
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image->move(public_path('img'), $image->getClientOriginalName());
            $image_url = asset('img').'/'.$image->getClientOriginalName();
        }
        $product->categoryid = $input['categoryid'];
        $product->productid = $input['productid'];
        $product->title = $input['title'];
        $product->thumbnail = $image_url;
        $product->quantity = $input['quantity'];
        $product->price = $input['price'];
        $product->description = $input['description'];
        $product->description_detail = $input['description_detail'];
        $product->save();
        return redirect()->route('product.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
        $product = Product::find($productid);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Data Removed');
    }
}
