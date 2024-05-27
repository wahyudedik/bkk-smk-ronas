@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Tags</h1>
    </div><!-- End Page Title -->

<div class="card">
    <div class="card-header">
        <h5>Edit Tag</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.blog.tag.update', ['id' => $tag->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tag</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $tag->name) }}" required>
            </div>
            <div class="mb-3" style="display: none;">
                <label for="slug" class="form-label">Slug Tag</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', Str::slug($tag->name)) }}">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $tag->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_published" name="is_published" {{ old('is_published', $tag->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Publikasikan</label>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Tag</button>
        </form>
    </div>
</div>
@endsection