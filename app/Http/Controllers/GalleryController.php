<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use App\Category;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all()->toArray();
        $latest_update = Gallery::latest('updated_at')->get();
        return view('adminlte::gallery.index', compact('galleries', 'latest_update'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('adminlte::gallery.create', compact('category'));
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);
        $gallery = new Gallery();
        $input = $request->all();
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image->move(public_path('img'), $image->getClientOriginalName());
            $image_url = asset('img').'/'.$image->getClientOriginalName();
        }
        $gallery->categoryid = $input['categoryid'];
        $gallery->thumbnail = $image_url;
        $gallery->description = $input['description'];
        $gallery->save();
        return redirect()->route('gallery.create')->with('success', 'Data Added');
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
        $gallery = Gallery::find($id);
        $category = Category::all();
        return view('adminlte::gallery.edit', compact('gallery', 'id', 'category'))->with('categoryid');
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
        $gallery = Gallery::find($id);
        $input = $request->all();
        $this->validate($request, [
            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);
        // if ($request->hasFile('thumbnail')) {
        //     $image = $request->file('thumbnail');
        //     $image->move(public_path('img'), $image->getClientOriginalName());
        //     $image_url = asset('img').'/'.$image->getClientOriginalName();
        // }
        $gallery->categoryid = $input['categoryid'];
        // $gallery->thumbnail = $image_url;
        $gallery->description = $input['description'];
        $gallery->save();
        return redirect()->route('gallery.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Data Removed');
    }

//---------------------------------------------------------------------------------------//


    //Handling data from frontend home page #gallery

    public function gallery(Request $request)
    {
        //---------Displaying items from gallery---------//
        $damnu = DB::table('galleries')
                    ->where('categoryid', '=', 'C01')
                    ->orWhere('categoryid', '=', 'C06')
                    ->paginate(12);

        $aonu = DB::table('galleries')
                    ->where('categoryid', '=', 'C02')
                    ->orWhere('categoryid', '=', 'C07')
                    ->paginate(12);

        $quannu = DB::table('galleries')
                    ->where('categoryid', '=', 'C03')
                    ->orWhere('categoryid', '=', 'C08')
                    ->paginate(12);

        $chanvay = DB::table('galleries')
                    ->where('categoryid', '=', 'C04')
                    ->orWhere('categoryid', '=', 'C09')
                    ->paginate(12);

        $bolien = DB::table('galleries')
                    ->where('categoryid', '=', 'C05')
                    ->orWhere('categoryid', '=', 'C10')
                    ->paginate(12);

        $mevabe = DB::table('galleries')
                    ->where('categoryid', '=', 'C11')
                    ->orWhere('categoryid', '=', 'C12')
                    ->paginate(12);


        //---------Statistics each kind of products and number of Admins---------//
        $thoitrangcongsoall = DB::table('products')
                            ->select('productid')
                            ->join('categories','products.categoryid','=','categories.categoryid')
                            ->where('categorygroup_id', '=', 'CG1')
                            ->get()->toArray();

        $countthoitrangcongso = count($thoitrangcongsoall);

        $thoitrangtreall = DB::table('products')
                            ->select('productid')
                            ->join('categories','products.categoryid','=','categories.categoryid')
                            ->where('categorygroup_id', '=', 'CG2')
                            ->get()->toArray();

        $countthoitrangtre = count($thoitrangtreall);

        $mevabeall = DB::table('products')
                        ->select('productid')
                        ->join('categories','products.categoryid','=','categories.categoryid')
                        ->where('categorygroup_id', '=', 'CG3')
                        ->get()->toArray();

        $countmevabe = count($mevabeall);

        $users = DB::table('users')
                ->select('id')
                ->get()->toArray();

        $countusers = count($users);

        return view('adminlte::homefrontend', compact('damnu', 'aonu', 'quannu', 'chanvay', 'bolien', 'mevabe', 'countthoitrangcongso', 'countthoitrangtre', 'countmevabe', 'countusers'));
    }

    //END Handling data from frontend home page #gallery
}
