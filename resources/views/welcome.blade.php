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

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Career</a></h4>
                            <p class="description">Create your career</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Jobs</a></h4>
                            <p class="description">Do your job</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Success</a></h4>
                            <p class="description">Make success your highest achievement</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Who We Are</p>
                    <h3>Unleash Potential with Creative Strategies to Become Successful</h3>
                    <p class="fst-italic">
                        Fungsi dan Tugas BKK SMKS Ronas :
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span><b>Meningkatkan Kesempatan Kerja</b> : Salah
                                satu
                                tujuan utama dari Bursa Kerja Khusus SMK adalah memberikan kesempatan kepada para
                                lulusan
                                SMK untuk menemukan pekerjaan yang sesuai dengan keterampilan dan pendidikan mereka.
                                Melalui
                                pameran kerja ini, siswa dapat terhubung langsung dengan perusahaan-perusahaan yang
                                mencari
                                karyawan dengan latar belakang SMK, membuka pintu bagi mereka untuk memulai karir
                                profesional mereka.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span><b>Membangun Jembatan antara Dunia Pendidikan
                                    dan
                                    Industri</b> : Bursa Kerja Khusus SMK memainkan peran penting dalam
                                memfasilitasi
                                hubungan antara dunia pendidikan dan dunia kerja. Dengan membawa bersama siswa SMK
                                dan
                                perusahaan, bursa kerja membantu mengidentifikasi kebutuhan industri dan
                                keterampilan yang
                                diperlukan. Hal ini memungkinkan lembaga pendidikan untuk menyesuaikan kurikulum
                                mereka agar
                                lebih relevan dengan tuntutan pasar kerja.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span><b>Memberikan Informasi tentang Peluang
                                    Karir</b> :
                                Bursa Kerja Khusus SMK juga berfungsi sebagai sumber informasi tentang berbagai
                                peluang
                                karir yang tersedia bagi lulusan SMK. Melalui seminar, lokakarya, dan presentasi
                                dari
                                berbagai perusahaan, siswa dapat memperoleh wawasan tentang berbagai industri dan
                                posisi
                                pekerjaan yang tersedia, membantu mereka dalam membuat keputusan yang terinformasi
                                tentang
                                karir masa depan mereka.</span></li>
                    </ul>
                    {{-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
                </div>

                <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <img src="{{ asset('homepage/assets/img/about1 (1).JPG') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('homepage/assets/img/about2 (1).JPG') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('homepage/assets/img/about2 (2).JPG') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('homepage/assets/img/about2 (3).JPG') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('homepage/assets/img/about2 (4).JPG') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-lg-12">
                                    <img src="{{ asset('homepage/assets/img/about1 (2).JPG') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg-12">
                                    <img src="{{ asset('homepage/assets/img/about1 (3).JPG') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('homepage/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('homepage/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('homepage/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('homepage/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('homepage/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('homepage/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="">Features</h2>
            <p>Berikut adalah tiga fitur yang dapat ditambahkan ke platform Bursa Kerja Khusus SMK</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-5 d-flex align-items-center">

                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <i class="bi bi-binoculars"></i>
                                <div>
                                    <h4 class="d-none d-lg-block">Pencocokan Berbasis Keahlian</h4>
                                    <p>
                                        Platform ini dapat memiliki fitur pencocokan berbasis keahlian yang
                                        memungkinkan
                                        siswa untuk memasukkan keahlian, minat, dan preferensi mereka. Sistem ini
                                        kemudian
                                        akan mencocokkan mereka dengan peluang kerja atau program pelatihan yang
                                        sesuai
                                        dengan profil mereka. Ini membantu siswa SMK untuk menemukan peluang yang
                                        sesuai
                                        dengan kemampuan dan minat mereka, meningkatkan kesesuaian antara pelamar
                                        dan
                                        pekerjaan yang ditawarkan.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                <i class="bi bi-box-seam"></i>
                                <div>
                                    <h4 class="d-none d-lg-block">Pelatihan dan Sertifikasi</h4>
                                    <p>
                                        Fitur ini memungkinkan siswa untuk mengakses pelatihan tambahan dan
                                        sertifikasi yang
                                        relevan dengan bidang pekerjaan yang diminati atau diinginkan. Platform
                                        dapat
                                        menyediakan daftar pelatihan yang tersedia, baik online maupun offline,
                                        beserta
                                        informasi tentang sertifikasi yang akan diperoleh dan manfaatnya dalam
                                        memperluas
                                        peluang kerja. Ini membantu siswa untuk meningkatkan keterampilan dan
                                        kualifikasi
                                        mereka sesuai dengan permintaan pasar kerja.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                <i class="bi bi-brightness-high"></i>
                                <div>
                                    <h4 class="d-none d-lg-block">Jaringan Alumni dan Mentor</h4>
                                    <p>
                                        Fitur ini memungkinkan siswa untuk terhubung dengan alumni SMK yang telah
                                        sukses di
                                        dunia kerja. Melalui platform ini, siswa dapat meminta saran, mendapatkan
                                        wawasan
                                        tentang industri tertentu, atau bahkan mencari mentor untuk membimbing
                                        mereka dalam
                                        mempersiapkan karier mereka. Jaringan alumni dan mentor dapat menjadi sumber
                                        inspirasi dan dukungan bagi siswa dalam menjelajahi jalur karier mereka dan
                                        merencanakan langkah-langkah selanjutnya setelah lulus.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul><!-- End Tab Nav -->

                </div>

                <div class="col-lg-6">

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                        <div class="tab-pane fade active show mb-3" id="features-tab-1">
                            <img src="{{ asset('homepage/assets/img/about1 (1).JPG') }}" alt=""
                                class="img-fluid">
                        </div><!-- End Tab Content Item -->
                        <div class="tab-pane fade active show mb-3" id="features-tab-1">
                            <img src="{{ asset('homepage/assets/img/about1 (2).JPG') }}" alt=""
                                class="img-fluid">
                        </div><!-- End Tab Content Item -->
                        <div class="tab-pane fade active show mb-3" id="features-tab-1">
                            <img src="{{ asset('homepage/assets/img/about1 (3).JPG') }}" alt=""
                                class="img-fluid">
                        </div><!-- End Tab Content Item -->
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Berikut adalah 6 layanan Bursa Kerja Khusus untuk SMK :</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <i class="bi bi-activity icon"></i>
                        <div>
                            <h3>Pelatihan Keterampilan</h3>
                            <p>Program pelatihan keterampilan yang disesuaikan dengan kebutuhan industri dan pasar
                                kerja,
                                membekali siswa SMK dengan keterampilan yang relevan dan diminati oleh pengusaha.
                            </p>
                            {{-- <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <i class="bi bi-broadcast icon"></i>
                        <div>
                            <h3>Penempatan Magang</h3>
                            <p>Membantu siswa SMK untuk mendapatkan kesempatan magang di perusahaan-perusahaan
                                terkemuka,
                                memungkinkan mereka untuk mendapatkan pengalaman langsung di lapangan dan membangun
                                jaringan
                                profesional.</p>
                            {{-- <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-easel icon"></i>
                        <div>
                            <h3>Pembinaan Karir</h3>
                            <p>Layanan konseling dan pembinaan karir yang membantu siswa SMK memahami pilihan karir
                                mereka,
                                menyusun rencana karir, dan mempersiapkan diri untuk memasuki dunia kerja setelah
                                lulus.</p>
                            {{-- <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <i class="bi bi-bounding-box-circles icon"></i>
                        <div>
                            <h3>Job Fair khusus SMK</h3>
                            <p>Acara yang diselenggarakan secara berkala di sekolah-sekolah SMK atau di lokasi
                                terpusat, di
                                mana perusahaan-perusahaan memberikan informasi tentang lowongan pekerjaan dan
                                kesempatan
                                kerja langsung kepada para siswa.</p>
                            {{-- <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                        <i class="bi bi-calendar4-week icon"></i>
                        <div>
                            <h3>Pendampingan Wirausaha</h3>
                            <p>Mendukung siswa SMK yang memiliki minat dalam kewirausahaan dengan memberikan
                                pengetahuan,
                                sumber daya, dan bimbingan untuk memulai dan mengelola bisnis mereka sendiri.</p>
                            {{-- <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <i class="bi bi-chat-square-text icon"></i>
                        <div>
                            <h3>Koneksi Industri</h3>
                            <p>Membangun hubungan yang erat dengan industri lokal dan regional untuk memfasilitasi
                                kolaborasi antara sekolah SMK dan perusahaan, termasuk pertukaran pengetahuan,
                                mentorship,
                                dan kesempatan kerja bagi lulusan SMK.</p>
                            {{-- <a href="service-details.html" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Pricing Section -->
    <section id="career" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Career</h2>
            <p>Bursa Kerja Khusus SMK adalah sebuah acara yang diselenggarakan khusus untuk para lulusan Sekolah
                Menengah
                Kejuruan (SMK) guna mempertemukan mereka dengan berbagai peluang kerja yang sesuai dengan bidang
                keahlian
                yang mereka kuasai. Acara ini bertujuan untuk membantu para siswa SMK dalam mencari pekerjaan atau
                kesempatan magang yang relevan dengan kompetensi yang mereka miliki setelah lulus. <a href="{{ route('dashboard') }}"
                    class="btn btn-outline-primary">View More</a></p>
        </div><!-- End Section Title -->

        <div class="container mb-3">

            <div class="row gy-4">

                @foreach ($careers as $career)
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>{{ $career->jabatan }}</h3>
                            <p class="description">{{ $career->perusahaan->nama_perusahaan }}</p>
                            <h4>
                                <sup>IDR</sup>
                                {{ number_format($career->gaji, 0, ',', '.') }}
                            </h4>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/user/dashboard') }}" class="cta-btn">Lamar Sekarang</a>
                                @else
                                    <a href="{{ route('login') }}" class="cta-btn">Lamar Sekarang</a>
                                @endauth
                            @endif
                            <p class="text-center small">{{ $career->jenis_karyawan }}</p>
                            <div class="tinymce-editor">
                                {!! substr(strip_tags($career->description), 0, 100) !!}...
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                @endforeach
            </div>
        </div>
        <div class="container mb-3">

            <div class="row gy-4">

                @foreach ($careerLinks as $link)
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>{{ $link->jabatan }}</h3>
                            <p class="description">{{ $link->perusahaan->nama_perusahaan }}</p>
                            <h4>
                                <sup>IDR</sup>
                                {{ number_format($link->gaji, 0, ',', '.') }}
                            </h4>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/user/dashboard') }}" class="cta-btn">Lamar Sekarang</a>
                                @else
                                    <a href="{{ route('login') }}" class="cta-btn">Lamar Sekarang</a>
                                @endauth
                            @endif
                            <p class="text-center small">{{ $link->jenis_karyawan }}</p>
                            <div class="tinymce-editor">
                                {!! substr(strip_tags($link->description), 0, 100) !!}...
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                @endforeach
            </div>
        </div>
    </section><!-- /Pricing Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Bursa Kerja Khusus SMK adalah sebuah acara yang diselenggarakan khusus untuk para siswa Sekolah
                Menengah
                Kejuruan (SMK) guna memfasilitasi mereka dalam mencari kesempatan kerja yang sesuai dengan bidang
                keahlian
                yang telah dipelajari selama di sekolah. Acara ini bertujuan untuk menjembatani kesenjangan antara
                dunia
                pendidikan dan dunia kerja serta memberikan siswa SMK akses yang lebih baik ke pasar tenaga kerja.
            </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p>Jl. Pendidikan No.05, Berat Besuk, Beratkulon, </p>
                        <p> Kemlagi, Kabupaten Mojokerto, Jawa Timur 61353</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>0321 362569</p>
                    </div> 
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                        data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p>smkronas@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.39086912312!2d112.3703749147255!3d-7.4294381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78105109f7a27b%3A0x18713830f004da43!2sSMKS%20ROUDLOTUN%20NASYIIN!5e0!3m2!1sen!2sid!4v1629077330705!5m2!1sen!2sid"
                        width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    <form action="{{ route('contact.store') }}" method="POST" class="form-contact" id="form-contact"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    value="{{ old('name') }}" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    value="{{ old('subject') }}" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required>{{ old('message') }}</textarea>
                            </div>

                            <div class="col-md-12 text-center">

                                <button type="submit" class="btn btn-primary"
                                    onclick="event.preventDefault();
                                    document.getElementById('form-contact').submit();
                                    return true;
                                ">Send
                                    Message</button>
                            </div>

                            @if (session('success'))
                                <script>
                                    Swal.fire({
                                        title: '{{ session('swal.title') }}',
                                        icon: 'success',
                                        timer: {{ session('swal.timer') }},
                                        showConfirmButton: false,
                                        allowOutsideClick: false,
                                        showCloseButton: true,
                                    });
                                </script>
                            @endif

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
