@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Category</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Category</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('admin.blog.category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" required readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="description" rows="15" required>{{ $category->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form><!-- Vertical Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const nameInput = document.querySelector('#name');
        const slugInput = document.querySelector('#slug');

        nameInput.addEventListener('change', function() {
            fetch('/admin/blog/category/checkSlug?name=' + nameInput.value)
                .then(response => response.json())
                .then(data => slugInput.value = data.slug)
        });
    </script>

@endsection