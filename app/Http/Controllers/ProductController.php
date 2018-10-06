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
    //END admin product management (route resource)


//---------------------------------------------------------------------------------------//


    //Handling data from thoi trang cong so
    public function thoitrangcongsoall(Request $request)
    {
        $products = DB::table('products')
                    ->join('categories','products.categoryid','=','categories.categoryid')
                    ->where('categorygroup_id', '=', 'CG1')
                    ->paginate(8);

        return view('adminlte::frontendstore.thoitrangcongso', compact('products'));
    }

    public function thoitrangcongsodamnu(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C01')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangcongso.damnu', compact('products'));
    }

    public function thoitrangcongsoaonu(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C02')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangcongso.aonu', compact('products'));
    }

    public function thoitrangcongsoquannu(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C03')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangcongso.quannu', compact('products'));
    }

    public function thoitrangcongsochanvay(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C04')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangcongso.chanvay', compact('products'));
    }

    public function thoitrangcongsobolien(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C05')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangcongso.bolien', compact('products'));
    }
    //END Handling data from thoi trang cong so


//---------------------------------------------------------------------------------------//
    //Handling data from thoi trang tre

    public function thoitrangtreall(Request $request)
    {
        $products = DB::table('products')
                    ->join('categories','products.categoryid','=','categories.categoryid')
                    ->where('categorygroup_id', '=', 'CG2')
                    ->paginate(8);
        
        return view('adminlte::frontendstore.thoitrangtre', compact('products'));
    }

    public function thoitrangtredamnu(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C06')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangtre.damnu', compact('products'));
    }

    public function thoitrangtreaonu(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C07')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangtre.aonu', compact('products'));
    }

    public function thoitrangtrequannu(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C08')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangtre.quannu', compact('products'));
    }

    public function thoitrangtrechanvay(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C09')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangtre.chanvay', compact('products'));
    }

    public function thoitrangtrebolien(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C10')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.thoitrangtre.bolien', compact('products'));
    }

    //END Handling data from thoi trang tre

//---------------------------------------------------------------------------------------//
    //Handling data from me va be
    public function mevabeall(Request $request)
    {
        $products = DB::table('products')
                    ->join('categories','products.categoryid','=','categories.categoryid')
                    ->where('categorygroup_id', '=', 'CG3')
                    ->paginate(8);
        
        return view('adminlte::frontendstore.mevabe', compact('products'));
    }

    public function mevabeme(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C11')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.mevabe.me', compact('products'));
    }

    public function mevabebe(Request $request)
    {
        $products = DB::table('products')
                    ->where('categoryid', '=', 'C12')
                    ->paginate(8);

        return view('adminlte::frontendsubmenu.mevabe.be', compact('products'));
    }
}