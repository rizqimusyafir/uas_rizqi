@extends('layouts.main')

@section('container')
  <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
  <div class="row">
    {{-- <div class="col-12 col-md-12 col-lg-8 mb-3"> --}}
    <div class="col-12 mb-3">
      <div class="card shadow mb-3">
			  <div class="row no-gutters">
			    <div class="col-lg-5" style="min-height: 60vh">
						@if ($post->file)
							<img src="{{ asset('storage/' . $post->file) }}" class="card-img" alt="...">
						@else
							<img src="{{ asset('/assets/img/anjay.jpeg') }}" class="card-img" alt="...">
						@endif
			    </div>
			    <div class="col-lg-7">
						<div class="card-header small text-muted d-flex">
							@php
									function TimeFormater($time) { return date('h:i, d/m/Y',strtotime($time));}
							@endphp
							Dibuat {{ TimeFormater($post->created_at) }} &bull; Diperbarui {{ TimeFormater($post->updated_at) }}
							<a href="{{ '/posts/publishers/'. $post->publisher->username }}" class="ml-auto">{{ $post->publisher->name; }}</a>
						</div>
						<div class="card-body">
			        <h3 class="card-title">
                {{ $post->name }}
							</h3><a href="{{ '/posts/categories/'. $post->category->slug  }}" class="badge badge-light">{{ $post->category->name }}</a>
			      </div>
						<div class="card-footer">
							<a href="{{ '/posts/'. $post->slug . '/edit' }}" class="btn btn-warning">
									<i class="fas fa-pencil-alt"></i>
							</a>
							<form action="{{ '/posts/'. $post->id }}" method="post" class="d-inline">
								@method('delete')
								@csrf
								<button class="btn btn-danger b-0" onclick="return confirm('Are you sure?')">
										<i class="fas fa-trash"></i>
								</button>
							</form>
						</div>
			    </div>
			  </div>
			</div>
    </div>
		<div class="col-12">
			<a href="{{ './list' }}" class="btn btn-secondary">&larr; Back</a>
		</div>
	</div>
@endsection
