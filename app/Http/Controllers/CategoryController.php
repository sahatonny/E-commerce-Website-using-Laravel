<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'status'=>'nullable',
        ]);
        Category::create($request->all([
            'name'=> $request->name,
            'description'=> $request->description,
            'status'=> $request-> status==true?1:0


        ]));
        return redirect('/category')-> back()-> with('status','Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return view('category.show');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('category.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

    }
}
