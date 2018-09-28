<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

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
        return view('adminlte::category.edit', compact('category', 'categoryid'));
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
        $this->validate($request, [
            'categoryid' => 'required',
            'categoryname' => 'required'
        ]);
        $category = Category::find($categoryid);
        $input = $request->all();
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
