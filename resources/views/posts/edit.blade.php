@extends('layouts.main')

@section('container')
  <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
  <div class="row">
    <div class="col-12 col-lg-6 col-md-10 mb-3">
      <form action="{{ '/posts/' . $post->slug }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="e.g. Meja TV Minimalis Kekinian Ishana" value="{{ old('name', $post->name ) }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="slug">Permalink</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="e.g. meja-tv-minimalis-kekinian-ishana" value="{{ old('slug', $post->slug ) }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="custom-select custom-select @error('category_id') is-invalid @enderror" name="category_id" id="category">
            <option>Choose Category</option>
            @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id))
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="file">Image</label>
          <div class="custom-file">
            <input type="hidden" name="oldFile" value="{{ $post->file }}">
            <input type="file" class="custom-file-input @error('file') is-invalid @enderror" name="file" id="file" accept="image/*" onchange="previewFile()">
            @error('file')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <small id="fileHelp" class="form-text text-muted">Only accepts <b>Image</b> file type</small>
            <label class="custom-file-label" for="file">{{ ($post->file) ? substr($post->file, 7) : 'Choose file' }}</label>
          </div>
        </div>
        <a href="{{ '/posts/list' }}" class="btn btn-secondary">&larr; Back</a>
        <button type="submit" class="btn btn-primary" id="submitbtn">Update</button>
      </form>
      <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
          fetch('/posts/checkSlug?name=' + name.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
        });

        const previewFile = () => {
          const file = document.querySelector('#file');
          const filename = document.querySelector('.custom-file-label');

          filename.textContent = file.files[0].name;
        }
      </script>
    </div>
  </div>
@endsection