@extends('layouts.main')

@section('container')
    <h1 class="h3 mb-4 text-gray-800">{{ $title }} <a href="{{ '/posts/add' }}" class="btn btn-sm btn-outline-primary">Add New</a></h1>
    @if (session()->has('messageSuccess'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('messageSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                function TimeFormater($time) { return date('H:i, d/m/Y',strtotime($time));}
                                @endphp
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ '/posts/'.$post->slug }}">{{ $post->name }}</a></td>
                                    <td><a href="{{ '/posts/categories/'. $post->category->slug  }}">{{ $post->category->name }}</a></td>
                                    <td><a href="{{ '/posts/publishers/'. $post->publisher->username }}">{{ $post->publisher->name }}</a></td>
                                    <td>{{ TimeFormater($post->created_at) }}</td>
                                    <td class="d-flex">
                                        <a href="{{ '/posts/'. $post->slug . '/edit' }}" class="btn btn-sm btn-warning mx-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ '/posts/'. $post->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger mx-1 b-0" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
