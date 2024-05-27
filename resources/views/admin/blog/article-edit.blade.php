@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Article</h1>
    </div><!-- End Page Title -->

    <div class="card shadow">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{ route('admin.blog.article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control" onchange="previewImage();">
                    <img id="preview" src="{{ $article->image ? Storage::url($article->image) : '#' }}"
                        alt="Preview Image" class="img-fluid mt-2"
                        style="display: {{ $article->image ? 'block' : 'none' }}; max-width: 100%; height: auto;">
                </div>
                <script>
                    function previewImage() {
                        var file = document.getElementById("image").files;
                        if (file.length > 0) {
                            var fileReader = new FileReader();

                            fileReader.onload = function(event) {
                                document.getElementById("preview").setAttribute("src", event.target.result);
                                document.getElementById("preview").style.display = "block";
                            };

                            fileReader.readAsDataURL(file[0]);
                        }
                    }
                </script>
                <div class="mb-3">
                    <label for="body" class="form-label">Konten</label>
                    <textarea class="tinymce-editor" name="body" id="body">{{ $article->body }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori:</label>
                    <select class="form-select" name="category_id" id="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tag_id" class="form-label">Tag:</label>
                    <select class="form-select" name="tag_id" id="tag_id" required>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" {{ $article->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="draft" id="draft" name="status"
                            {{ !$article->is_published ? 'checked' : '' }}>
                        <label class="form-check-label" for="draft">
                            Draft
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="publish" id="publish" name="status"
                            {{ $article->is_published ? 'checked' : '' }}>
                        <label class="form-check-label" for="publish">
                            Publish
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary w-100">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
