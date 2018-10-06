<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->toArray();
        $latest_update = Category::latest('updated_at')->get();
        return view('adminlte::category.index', compact('categories', 'latest_update'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::category.create');
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
            'categoryid' => 'required|unique:categories',
            'categoryname' => 'required'
        ]);
        $category = new Category();
        $input = $request->all();
        $category->categorygroup_id = $input['categorygroup_id'];
        $category->categoryid = $input['categoryid'];
        $category->categoryname = $input['categoryname'];
        $category->save();
        return redirect()->route('category.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryid)
    {
        $category = Category::find($categoryid);
        $categorygroup = DB::table('categoriesgroup')->select('categorygroup_id')->get();
        return view('adminlte::category.edit', compact('category', 'categoryid', 'categorygroup'))->with('categorygroup_id');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryid)
    {
        $category = Category::find($categoryid);
        $input = $request->all();
        if ($category->categoryid != $input['categoryid']) {
            $this->validate($request, [
                'categoryid' => 'required|unique:categories',
                'categoryname' => 'required'
            ]);
        }
        $this->validate($request, [
            'categoryname' => 'required'
        ]);
        $category->categorygroup_id = $input['categorygroup_id'];
        $category->categoryid = $input['categoryid'];
        $category->categoryname = $input['categoryname'];
        $category->save();
        return redirect()->route('category.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryid)
    {
        $category = Category::find($categoryid);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Data Removed');
    }
}
