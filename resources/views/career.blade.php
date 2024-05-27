@extends('main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="{{ asset('homepage/assets/img/hero-bg-light.webp') }}" alt="">
        </div>
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 data-aos="fade-up" class="">Welcome to <span>BKK SMKS RONAS</span></h1>
                <p data-aos="fade-up" data-aos-delay="100" class="">Quickly start your career now and set the
                    stage for
                    success<br></p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#about" class="btn-get-started">About Me</a>
                    <a href="https://www.youtube.com/watch?v=HBdSm3mx3qU" target="_blank"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
                <img src="{{ asset('homepage/assets/img/hero-services-img.webp') }}" class="img-fluid hero-img"
                    alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
    </section><!-- /Hero Section -->
    
    <!-- Job Vacancy Section -->
    <section id="job-vacancy" class="job-vacancy section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Job Vacancy</h2>
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                @foreach ($job_vacancies as $job_vacancy)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="job-item">
                        <div class="thumb">
                            <img src="{{ Voyager::image($job_vacancy->image) }}" alt="{{ $job_vacancy->title }}" class="img-fluid">
                        </div>
                        <h3>
                            <a href="{{ route('job-vacancy.show', $job_vacancy->slug) }}">{{ $job_vacancy->title }}</a>
                        </h3>
                        <div class="meta">
                            <span>{{ $job_vacancy->created_at->format('d M Y') }}</span>
                        </div>
                        <p>{{ Str::limit(strip_tags($job_vacancy->body), 100, '...') }}</p>
                        <a href="{{ route('job-vacancy.show', $job_vacancy->slug) }}" class="btn-read-more">Read More</a>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="d-flex justify-content-center">
                {!! $job_vacancies->links() !!}
            </div>

        </div>
    </section><!-- /Job Vacancy Section -->
@endsection
