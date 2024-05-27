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

    <!-- Blog Section -->
    <section id="blog" class="blog section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Recent Blog</h2>
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                @foreach ($articles as $article)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item">
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                            <h3>
                                <a href="{{ route('blog.show', $article->slug) }}">{{ $article->title }}</a>
                            </h3>
                            <div class="post-meta">
                                <span>{{ $article->created_at->format('d M Y') }}</span>
                            </div>
                            <p>{{ Str::limit(strip_tags($article->body), 100, '...') }}</p>
                            <a href="{{ route('blog.show', $article->slug) }}" class="btn-read-more">Read More</a>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="d-flex justify-content-center">
                {!! $articles->links() !!}
            </div>

        </div>
    </section><!-- /Blog Section -->
@endsection
