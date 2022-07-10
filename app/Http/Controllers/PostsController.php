<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Posts;
use App\Models\Category;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.list', [
            'siteName' => 'Musyafir Site',
            'title' => 'Post List',
            'posts' => Posts::latest()->get()
            // 'posts' => Posts::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    public function posts(Posts $Post)
    {
        // $Post = Posts::find($id);
        // $Post = Posts::where('user_id', auth()->user()->id)->find($id);

        return view('posts.detail', [
            'siteName' => 'Musyafir Site',
            'title' => 'Detail Posts '. $Post['name'],
            'post' => $Post,
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posts::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
    
    public function add()
    {
        return view('posts.add', [
            'siteName' => 'Musyafir Site',
            'title' => 'Post Add',
            'categories' => Category::all()
        ]);
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required','unique:Posts', 'max:255'],
            'category_id' => ['required'],
            'file' => ['required'],
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $filename =  $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs(
            'img', $filename
        );
        if ($request->oldFile){
            Storage::delete($request->oldFile);
        }
        $validatedData['file'] = $path;

        Posts::create($validatedData);

        return redirect('/posts/list')->with('messageSuccess', 'New Post has been added!');
    }

    public function delete(Posts $Post)
    {
        if($Post->file) {
            Storage::delete($Post->file);
        }

        Posts::destroy($Post->id);
        return redirect('/posts/list')->with('messageSuccess', 'Post has been deleted!');
    }

    public function edit(Posts $Post)
    {
        return view('posts.edit', [
            'siteName' => 'Musyafir Site',
            'title' => 'Post Edit',
            'post' => $Post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Posts $Post)
    {
        if($request->slug === $Post->slug) {
            $rules = [
                'name' => ['required', 'max:255'],
                'category_id' => ['required']
            ];
        } else {
            $rules['slug'] = ['required','unique:Posts', 'max:255'];
        }
        
        $validatedData = $request->validate($rules);

        if ($request->file('file')) {
            $filename =  $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs(
                'img', $filename
            );
            if ($request->oldFile){
                Storage::delete($request->oldFile);
            }
            $validatedData['file'] = $path;
        }

        $validatedData['user_id'] = auth()->user()->id;

        Posts::where('id', $Post->id)
        ->update($validatedData);

        return redirect('/posts/list')->with('messageSuccess', 'Post has been updated!');
    }
}
