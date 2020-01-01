<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('setups.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('setups.categories.create');
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('setups.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
