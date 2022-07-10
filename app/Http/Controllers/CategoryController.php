<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories/list', [
            'siteName' => 'Musyafir Site',
            'title' => 'Post Category',
            'categories' => Category::all()
        ]);

    }

    public function add()
    {
        return view('categories.add', [
            'siteName' => 'Musyafir Site',
            'title' => 'Category Add'
        ]);
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required','unique:categories', 'max:255']
        ]);

        Category::create($validatedData);

        return redirect('/posts/categories')->with('messageSuccess', 'New category has been added!');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'siteName' => 'Musyafir Site',
            'title' => 'Category Edit',
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        if($request->slug === $category->slug) {
            $rules = [
                'name' => ['required', 'max:255']
            ];
        } else {
            $rules['slug'] = ['required','unique:categories', 'max:255'];
        }
        
        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)
        ->update($validatedData);

        return redirect('/posts/categories')->with('messageSuccess', 'Category has been updated!');
    }
    
    public function delete(Category $category)
    {
        $CategoryInUse = Category::where('id', $category->id)->withCount('posts')->get()[0]->posts_count;
        
        if($CategoryInUse) {
            return redirect('/posts/categories')->with('messageFail', 'Category can\'t be deleted, because in use on the post!');
        } else {
            Category::destroy($category->id);
            return redirect('/posts/categories')->with('messageSuccess', 'Category has been deleted!');
        }

    }
}
