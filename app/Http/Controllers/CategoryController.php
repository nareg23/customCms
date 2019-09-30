<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest as myRequest;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('categories.categories')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param myRequest $request
     * @return Response
     */
    public function store(myRequest $request)
    {


        Category::create([
            'name' => request('name')
        ]);

        session()->flash('success', 'the category has been added/edited');
        return redirect('/category');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category)
    {

        return view('categories.create', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param myRequest $request
     * @param Category $category
     * @return void
     */
    public function update(myRequest $request, Category $category)
    {
        $category->name = \request('name');
        $category->save();

        session()->flash('success', 'the category has been added/edited');
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     * @throws Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session('success', 'Category has been deleted');
        return redirect('/category');
    }
}
