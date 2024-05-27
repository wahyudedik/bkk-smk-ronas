@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Create Article</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Article</h5>
                        <form action="{{ route('admin.blog.article.store') }}" method="POST" enctype="multipart/form-data" class="p-3">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul:</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Isi Artikel:</label>
                                <textarea class="tinymce-editor" name="body" id="body"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar:</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Kategori:</label>
                                <select class="form-select" name="category_id" id="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tag_id" class="form-label">Tag:</label>
                                <select class="form-select" name="tag_id" id="tag_id" required>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="draft" id="draft" name="status">
                                    <label class="form-check-label" for="draft">
                                        Draft
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="publish" id="publish" name="status">
                                    <label class="form-check-label" for="publish">
                                        Publish
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
