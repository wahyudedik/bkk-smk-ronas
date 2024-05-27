@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8"> 
                <div class="row">

                    <!-- Career Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card career-card">

                            <div class="card-body">
                                <h5 class="card-title">Careers <span id="timePeriod">| {{ $timePeriod }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-briefcase"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $career->count() + $careerLink->count() }}</h6> <!-- activeCareersCount -->
                                        <span class="text-success small pt-1 fw-bold">New</span> <span
                                            class="text-muted small pt-2 ps-1">jobs</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Career Card -->

                    <!-- Blog Post Count Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card blog-post-card">
                            <div class="card-body">
                                <h5 class="card-title">Blog Posts <span id="timePeriod">| {{ $timePeriod }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal-richtext"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="blogCount">{{ $articles->count() }}</h6>
                                        <!-- jumlah blog yang sudah di post -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Blog Post Count Card -->

                    <!-- User Count Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card user-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengguna <span>| {{ $timePeriod }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $users->count() }}</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End User Count Card -->

                    <!-- User Acceptance Comparison -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">User Acceptance Comparison <span>/Today</span></h5>

                                <!-- Bar Chart -->
                                <div id="userAcceptanceChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#userAcceptanceChart"), {
                                            series: [{
                                                name: 'Accepted',
                                                data: [44, 55, 41, 64, 22, 43, 21]
                                            }, {
                                                name: 'Rejected',
                                                data: [53, 32, 33, 52, 13, 44, 32]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'bar',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    columnWidth: '55%',
                                                    endingShape: 'rounded'
                                                },
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                show: true,
                                                width: 2,
                                                colors: ['transparent']
                                            },
                                            xaxis: {
                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                                                title: {
                                                    text: 'Month'
                                                }
                                            },
                                            yaxis: {
                                                title: {
                                                    text: 'Number of Users'
                                                }
                                            },
                                            fill: {
                                                opacity: 1
                                            },
                                            tooltip: {
                                                y: {
                                                    formatter: function(val) {
                                                        return val + " users"
                                                    }
                                                }
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Bar Chart -->

                            </div>

                        </div>
                    </div><!-- End User Acceptance Comparison -->

                    <!-- Company Applications Ranking -->
                    <div class="col-12">
                        <div class="card company-applications-ranking overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Company Applications Ranking <span>| This Month</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Number of Applications</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>PT. Maju Mundur</td>
                                            <td>320</td>
                                            <td><span class="badge bg-success">Most Active</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>PT. Berkah Bersama</td>
                                            <td>280</td>
                                            <td><span class="badge bg-warning">Active</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>PT. Innovasi Baru</td>
                                            <td>250</td>
                                            <td><span class="badge bg-warning">Active</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>PT. Sejahtera Selalu</td>
                                            <td>200</td>
                                            <td><span class="badge bg-warning">Active</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>PT. Kreatifitas Tanpa Batas</td>
                                            <td>180</td>
                                            <td><span class="badge bg-warning">Active</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Company Applications Ranking -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top 5 Latest Jobs <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Date Posted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/job-1.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Software Developer</a></td>
                                            <td>PT. Maju Mundur</td>
                                            <td>Jakarta</td>
                                            <td>2023-03-01</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/job-2.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Data Analyst</a></td>
                                            <td>PT. Berkah Bersama</td>
                                            <td>Bandung</td>
                                            <td>2023-03-02</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/job-3.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Network Engineer</a></td>
                                            <td>PT. Innovasi Baru</td>
                                            <td>Surabaya</td>
                                            <td>2023-03-02</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/job-4.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Product Manager</a></td>
                                            <td>PT. Sejahtera Selalu</td>
                                            <td>Yogyakarta</td>
                                            <td>2023-03-03</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/job-5.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Graphic Designer</a></td>
                                            <td>PT. Kreatifitas Tanpa Batas</td>
                                            <td>Bali</td>
                                            <td>2023-03-04</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Alumni vs General Comparison Report -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Alumni vs General Comparison <span>| This Month</span></h5>

                        <div id="comparisonChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var comparisonChart = echarts.init(document.querySelector("#comparisonChart")).setOption({
                                    tooltip: {
                                        trigger: 'item',
                                        formatter: '{a} <br/>{b}: {c} ({d}%)'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'left',
                                        data: ['Alumni SMK Ronas', 'General']
                                    },
                                    series: [{
                                        name: 'Comparison',
                                        type: 'pie',
                                        radius: '55%',
                                        data: [{
                                                value: 78,
                                                name: 'Alumni SMK Ronas'
                                            },
                                            {
                                                value: 65,
                                                name: 'General'
                                            }
                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Alumni vs General Comparison Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Blogs &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            @foreach ($articles as $article)
                                <div class="post-item clearfix">
                                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
                                    <h4><a href="#">{{ $article->title }}</a></h4>
                                    <p>{{ Str::limit(strip_tags($article->body), 100, '...') }}</p>

                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>
@endsection
