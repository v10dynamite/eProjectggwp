<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $product = Product::find($productid);
        $input = $request->all();
        if ($product->productid != $input['productid']) {
            $this->validate($request, [
                'productid' => 'required|unique:products',
                'title' => 'required',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'quantity' => 'required',
                'price' => 'required',
                'description' => 'required',
                'description_detail' => 'required'
            ]);
        }
        $this->validate($request, [
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required',
            'price' => 'required',
            'description' => 'required',
            'description_detail' => 'required'
        ]);
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

    //For displaying data to frontend store
    public function thoitrangcongsoall(Request $request)
    {
        // $products = Product::paginate(8);
        // $products = Category::where('categorygroup_id', '=', 'CG1')->get();
        $array = DB::table('products')
                    ->join('categories','products.categoryid','=','categories.categoryid')
                    ->where('categorygroup_id', '=', 'CG1')
                    ->get();
        $products = [];
        foreach ( $array as $obj) {
            $products[] = (array)$obj;
        }
        // $products = $array->toArray();
        // var_dump( $products);
        // die();
        return view('adminlte::frontendstore.thoitrangcongso',['products'=>$products]);
    }

    public function thoitrangtreall(Request $request)
    {
        $array = DB::table('products')
                    ->join('categories','products.categoryid','=','categories.categoryid')
                    ->where('categorygroup_id', '=', 'CG2')
                    ->get();
        $products = [];
        foreach ( $array as $obj) {
            $products[] = (array)$obj;
        }
        // $products = Product::paginate(8);
        return view('adminlte::frontendstore.thoitrangtre', compact('products'));
    }

    public function mevabeall(Request $request)
    {
        $array = DB::table('products')
                    ->join('categories','products.categoryid','=','categories.categoryid')
                    ->where('categorygroup_id', '=', 'CG3')
                    ->get();
        $products = [];
        foreach ( $array as $obj) {
            $products[] = (array)$obj;
        }
        // $products = Product::paginate(8);
        return view('adminlte::frontendstore.mevabe', compact('products'));
    }
}
