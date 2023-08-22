<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = Category::create($validatedData);
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update($validatedData);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->restaurants()->count() > 0) {
            Session::flash('error', 'このカテゴリはレストランに使用されているため、削除できません。');
            return redirect()->back();
        }

        $category->delete();
        Session::flash('success', 'カテゴリを削除しました。');
        return redirect()->route('categories.index');
    }
}
