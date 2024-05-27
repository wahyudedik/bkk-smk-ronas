@extends('main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 data-aos="fade-up" class="">Welcome to <span>BKK SMKS RONAS</span></h1>
                <p data-aos="fade-up" data-aos-delay="100" class="">Quickly start your career now and set the
                    stage for
                    success<br></p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('home') }}#about" class="btn-get-started">About Me</a>
                    <a href="https://www.youtube.com/watch?v=HBdSm3mx3qU" target="_blank"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Blog Details</h2>
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                        <h3>
                            <a href="{{ route('blog.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        <div class="meta">
                            <span>{{ $article->created_at->format('d M Y') }}</span>
                        </div>
                        <div class="tinymce-editor">
                            {!! $article->body !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-details-sidebar">
                        <div class="recent-posts">
                            <h3>Recent Posts</h3>
                            @foreach ($recent_blogs as $recent_blog)
                                <div class="recent-post-item">
                                    <div class="thumb">
                                        <img src="{{ Storage::url($article->image) }}" alt="{{ $recent_blog->title }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a
                                                href="{{ route('blog.show', $recent_blog->slug) }}">{{ $recent_blog->title }}</a>
                                        </h4>
                                        <div class="meta">
                                            <span>{{ $recent_blog->created_at->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="popular-tags">
                            <h3>Popular Tags</h3>
                            <div class="tags">
                                @foreach ($tags as $tag)
                                    <a href="" class="tag">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="comment-section">
                <h3>Komentar</h3>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
            </div>

        </div>
    </section><!-- /Blog Details Section -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v10.0" nonce="YOUR_NONCE"></script>
@endsection

