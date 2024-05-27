@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1>Frequently Asked Questions</h1>
    </div><!-- End Page Title -->

    <section class="section faq">
        <div class="row">
            <div class="col-lg-6">

                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Manual Blog</h5>

                        <div class="pt-2">
                            <h6>1. Blog Post Scheduling</h6>
                            <p>You can schedule a blog post to be published in the future by choosing a date and time in the
                                publishing options when creating a new post.</p>
                        </div>

                        <div class="pt-2">
                            <h6>2. Blog Post Categories</h6>
                            <p>You can add categories to your blog posts by choosing one or more categories in the
                                publishing options when creating a new post.</p>
                        </div>

                        <div class="pt-2">
                            <h6>3. Blog Search</h6>
                            <p>You can search for blog posts on the homepage by typing a keyword or phrase in the search bar
                                at the top of the page.</p>
                        </div>

                        <div class="pt-2">
                            <h6>4. Blog Post Tags</h6>
                            <p>You can add tags to your blog posts by choosing one or more tags in the publishing options
                                when creating a new post.</p>
                        </div>

                        <div class="pt-2">
                            <h6>5. Blog Post Comments</h6>
                            <p>You can enable comments on your blog posts by checking the "Enable Comments" checkbox in the
                                publishing options when creating a new post.</p>
                        </div>


                    </div>
                </div>

                <!-- F.A.Q Group 1 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Share Loker</h5>

                        <div class="accordion accordion-flush" id="faq-group-1">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button"
                                        data-bs-toggle="collapse">
                                        Bagaimana cara share loker di Career Center?
                                    </button>
                                </h2>
                                <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Untuk share loker di Career Center, caranya mudah:
                                        <ol>
                                            <li>Masuk ke akun Career Center Anda</li>
                                            <li>Klik menu "Loker"</li>
                                            <li>Klik tombol "Share Loker"</li>
                                            <li>Isi formulir dengan detail lowongan pekerjaan</li>
                                            <li>Klik tombol "Share"</li>
                                        </ol>
                                        Setelah itu, lowongan pekerjaan Anda akan tersedia di halaman utama Career Center
                                        dan bisa dibaca oleh pelamar yang tertarik dengan pekerjaan itu.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End F.A.Q Group 1 -->

            </div>

            <div class="col-lg-6">

                <!-- F.A.Q Group 2 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manual untuk fitur laporan</h5>

                        <div class="accordion accordion-flush" id="faq-group-2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button"
                                        data-bs-toggle="collapse">
                                        Bagaimana cara menggunakan fitur laporan di Career Center?
                                    </button>
                                </h2>
                                <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Untuk menggunakan fitur laporan di Career Center, caranya mudah:
                                        <ol>
                                            <li>Masuk ke akun Career Center Anda</li>
                                            <li>Klik menu "Laporan"</li>
                                            <li>Pilih jenis laporan yang Anda inginkan</li>
                                            <li>Isi formulir dengan detail laporan yang Anda butuhkan</li>
                                            <li>Klik tombol "Kirim"</li>
                                        </ol>
                                        Setelah itu, laporan Anda akan dikirimkan ke admin dan akan segera ditindaklanjuti.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button"
                                        data-bs-toggle="collapse">
                                        Bagaimana cara mengedit laporan di Career Center?
                                    </button>
                                </h2>
                                <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Untuk mengedit laporan di Career Center, caranya mudah:
                                        <ol>
                                            <li>Masuk ke akun Career Center Anda</li>
                                            <li>Klik menu "Laporan"</li>
                                            <li>Cari laporan yang ingin Anda edit dengan menggunakan fitur pencarian</li>
                                            <li>Klik tombol "Edit" di samping laporan yang ingin Anda edit</li>
                                            <li>Isi formulir dengan detail laporan yang ingin Anda ubah</li>
                                            <li>Klik tombol "Update"</li>
                                        </ol>
                                        Setelah itu, laporan Anda akan diupdate dan akan terlihat pada halaman utama laporan
                                        Anda.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button"
                                        data-bs-toggle="collapse">
                                        Bagaimana cara menghapus laporan di Career Center?
                                    </button>
                                </h2>
                                <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                                    <div class="accordion-body">
                                        Untuk menghapus laporan di Career Center, caranya mudah:
                                        <ol>
                                            <li>Masuk ke akun Career Center Anda</li>
                                            <li>Klik menu "Laporan"</li>
                                            <li>Cari laporan yang ingin Anda hapus dengan menggunakan fitur pencarian</li>
                                            <li>Klik tombol "Hapus" di samping laporan yang ingin Anda hapus</li>
                                            <li>Konfirmasi penghapusan dengan mengklik tombol "Hapus" pada pop-up yang
                                                muncul</li>
                                        </ol>
                                        Setelah itu, laporan Anda akan dihapus dari database dan tidak akan tersedia lagi di
                                        halaman utama laporan Anda.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End F.A.Q Group 2 -->

                <!-- F.A.Q Group 3 -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Semua fitur di aplikasi ini</h5>

                        <div class="accordion accordion-flush" id="faq-group-3">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button"
                                        data-bs-toggle="collapse">
                                        Fitur pencarian laporan
                                    </button>
                                </h2>
                                <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Anda dapat mencari laporan Anda sendiri dengan mudah dengan fitur pencarian.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button"
                                        data-bs-toggle="collapse">
                                        Fitur komentar
                                    </button>
                                </h2>
                                <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Anda dapat memberikan komentar pada laporan untuk menjawab pertanyaan, memberi
                                        saran, atau memberi informasi lain yang bermanfaat.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button"
                                        data-bs-toggle="collapse">
                                        Fitur upload file
                                    </button>
                                </h2>
                                <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Anda dapat mengunggah file sebagai bukti atau lampiran dari laporan Anda.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-4"
                                        type="button" data-bs-toggle="collapse">
                                        Fitur editing laporan
                                    </button>
                                </h2>
                                <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Anda dapat mengedit laporan Anda sendiri apabila terjadi kesalahan atau ada
                                        informasi yang kurang lengkap.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-5"
                                        type="button" data-bs-toggle="collapse">
                                        Fitur hapus laporan
                                    </button>
                                </h2>
                                <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                    <div class="accordion-body">
                                        Anda dapat menghapus laporan Anda sendiri jika terjadi kesalahan atau Anda
                                        tidak ingin menggunakan laporan tersebut lagi.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End F.A.Q Group 3 -->

            </div>

        </div>
    </section>
@endsection
