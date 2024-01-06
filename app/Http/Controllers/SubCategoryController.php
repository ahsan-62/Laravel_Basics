<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Requests\SubCategoryUpdateRequest;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories=SubCategory::get(['id','name','category_id']);
        // return $subcategories;
        return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories=Category::all();
        return view('subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {

        // dd($request->all());

        SubCategory::create([

            'category_id'=>$request->category_id,
            'name'=>$request->subcategory_name,
            'slug'=>Str::slug($request->subcategory_name),
            'is_active'=>$request->filled('is_active')

        ]);

        Session::flash('status','Subcategory Created Succesfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories=Category::all();
        $subcategories=SubCategory::find($id);
        return view('subcategory.edit',compact('categories','subcategories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryUpdateRequest $request, string $id)
    {

        $subcategory=SubCategory::find($id);

        $subcategory->update([

            'category_id'=>$request->category_id,
            'name'=>$request->subcategory_name,
            'slug'=>Str::slug($request->subcategory_name),
            'is_active'=>$request->filled('is_active')


        ]);

        Session::flash('status','Subcategory Updated Successfully');

        return redirect()->route('sub-category.index');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    // dd($id);

    SubCategory::find($id)->delete();

    Session::flash('status','Subcategory Deleted Succesfully');

    return redirect()->route('sub-category.index');

    }
}
