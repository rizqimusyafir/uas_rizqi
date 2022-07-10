<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginAuthenticate']);
Route::post('/logout', [AuthController::class, 'logoutAuthenticate']);
// Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
// Route::post('/register', [AuthController::class, 'registerStore']);

Route::get('/posts/checkSlug', [PostsController::class, 'checkSlug'])->middleware('auth');

// create
Route::get('/posts/add', [PostsController::class, 'add'])->middleware('auth');
Route::post('/posts/add', [PostsController::class, 'save'])->middleware('auth');
Route::get('/categories/add', [CategoryController::class, 'add'])->middleware('auth');
Route::post('/categories/add', [CategoryController::class, 'save'])->middleware('auth');

// read
Route::get('/posts/list', [PostsController::class, 'index'])->middleware('auth');
Route::get('/posts/categories/', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/posts/categories/{category:slug}', function(Category $category){
    return view('posts/list', [
        'siteName' => 'Musyafir Site',
        'title' => 'Posts by Category: ' . $category->name,
        'posts' => $category->posts->load('category', 'publisher'),
    ]);
})->middleware('auth');
Route::get('/posts/publishers/{publisher:username}', function(User $publisher){
    return view('posts/list', [
        'siteName' => 'Musyafir Site',
        'title' => 'Posts by Publisher: ' . $publisher->name,
        'posts' => $publisher->posts->load('category', 'publisher'),
    ]);
})->middleware('auth');
Route::get('/posts/{post:slug}', [PostsController::class, 'posts'])->middleware('auth');
Route::get('/posts/view-3d/{post:slug}', [PostsController::class, 'view3D']);
Route::get('/posts/view-ar/{post:slug}', [PostsController::class, 'viewAR']);

// update
Route::get('/posts/{post:slug}/edit', [PostsController::class, 'edit'])->middleware('auth');
Route::put('/posts/{post:slug}', [PostsController::class, 'update'])->middleware('auth');
Route::get('/categories/{category:slug}/edit', [CategoryController::class, 'edit'])->middleware('auth');
Route::put('/categories/{category:slug}', [CategoryController::class, 'update'])->middleware('auth');

// delete
Route::delete('/posts/{post:id}', [PostsController::class, 'delete'])->middleware('auth');
Route::delete('/categories/{category:id}', [CategoryController::class, 'delete'])->middleware('auth');