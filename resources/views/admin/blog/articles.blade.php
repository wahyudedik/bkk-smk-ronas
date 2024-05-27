@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Articles</h1>
    </div><!-- End Page Title -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                timer: 1500,
                showConfirmButton: false,
                timerProgressBar: true,
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('error') }}",
                timer: 1500,
                showConfirmButton: false,
                timerProgressBar: true,
            })
        </script>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-left">
                <a href="{{ route('admin.blog.article.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Create Article
                </a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Articles</h5>
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="row">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $loop->index + $i + 1 }}</th>
                                <td>
                                    @if ($article->image)
                                        <a href="{{ Storage::url($article->image) }}" data-lightbox="image-1" data-title="{{ $article->title }}">
                                            <img src="{{ Storage::url($article->image) }}" width="50" alt="{{ $article->title }}">
                                        </a>
                                    @else
                                        <span>No Image Available</span>
                                    @endif
                                </td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->slug }}</td>
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->category->name }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td>
                                    @if ($article->is_published)
                                        <span class="text-success">Published</span>
                                    @else
                                        <span class="text-danger">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.blog.article.delete', $article->id) }}" method="POST"
                                        onsubmit="return confirmDelete(event)">
                                    <script>
                                        function confirmDelete(event) {
                                            event.preventDefault();
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    event.target.submit();
                                                }
                                            })
                                            return false;
                                        }
                                    </script>

                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.blog.article.edit', $article->id) }}"
                                            class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
@endSection