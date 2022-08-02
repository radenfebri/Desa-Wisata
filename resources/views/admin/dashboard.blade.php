@extends('admin.layout.layout', ['menu' => 'dashboard', 'submenu' => ''])

@section('title', 'Dashboard')

@section('content')


<!-- Left side columns -->
<div class="col-lg-8">
    <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Team</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-user"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $teams->count() }}</h6>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Blog</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-book"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $artikels->count() }}</h6>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

                <div class="card-body">
                    <h5 class="card-title">User</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $user->count() }}</h6>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- End Customers Card -->

        <!-- Reports -->
        {{-- <div class="col-12">
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

                <div class="card-body">
                    <h5 class="card-title">Reports <span>/Today</span></h5>

                    <!-- Line Chart -->
                    <div id="reportsChart"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new ApexCharts(document.querySelector("#reportsChart"), {
                                series: [{
                                    name: 'Sales',
                                    data: [31, 40, 28, 51, 42, 82, 56],
                                }, {
                                    name: 'Revenue',
                                    data: [11, 32, 45, 32, 34, 52, 41]
                                }, {
                                    name: 'Customers',
                                    data: [15, 11, 32, 18, 9, 24, 11]
                                }],
                                chart: {
                                    height: 350,
                                    type: 'area',
                                    toolbar: {
                                        show: false
                                    },
                                },
                                markers: {
                                    size: 4
                                },
                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                fill: {
                                    type: "gradient",
                                    gradient: {
                                        shadeIntensity: 1,
                                        opacityFrom: 0.3,
                                        opacityTo: 0.4,
                                        stops: [0, 90, 100]
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'smooth',
                                    width: 2
                                },
                                xaxis: {
                                    type: 'datetime',
                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                                },
                                tooltip: {
                                    x: {
                                        format: 'dd/MM/yy HH:mm'
                                    },
                                }
                            }).render();
                        });
                    </script>
                    <!-- End Line Chart -->

                </div>

            </div>
        </div> --}}
        <!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">


                <div class="card-body">
                    <h5 class="card-title">Pesan Customers</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Customer</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesans as $item)

                                <tr>
                                    <td><a href="{{ route('pesan.edit', $item->id) }}" class="text-primary">{{ $item->name }}</td>
                                    <td>{{ $item->subjek }}</a></td>
                                    <td>{{ $item->pesan }}</td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- End Recent Sales -->

        <!-- Top Selling -->
        {{-- <div class="col-12">
            <div class="card top-selling overflow-auto">

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
                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Preview</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Sold</th>
                                <th scope="col">Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ asset('template-back') }}/img/product-1.jpg" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                <td>$64</td>
                                <td class="fw-bold">124</td>
                                <td>$5,828</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ asset('template-back') }}/img/product-2.jpg" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                <td>$46</td>
                                <td class="fw-bold">98</td>
                                <td>$4,508</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ asset('template-back') }}/img/product-3.jpg" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                <td>$59</td>
                                <td class="fw-bold">74</td>
                                <td>$4,366</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ asset('template-back') }}/img/product-4.jpg" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                <td>$32</td>
                                <td class="fw-bold">63</td>
                                <td>$2,016</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ asset('template-back') }}/img/product-5.jpg" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                <td>$79</td>
                                <td class="fw-bold">41</td>
                                <td>$3,239</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div> --}}
        <!-- End Top Selling -->

    </div>
</div>
<!-- End Left side columns -->

<!-- Right side columns -->
<div class="col-lg-4">

    <!-- Recent Activity -->
    {{-- <div class="card">
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

        <div class="card-body">
            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

            <div class="activity">

                <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                        Voluptatem blanditiis blanditiis eveniet
                    </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                        Voluptates corrupti molestias voluptatem
                    </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                        Est sit eum reiciendis exercitationem
                    </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                </div><!-- End activity item-->

            </div>

        </div>
    </div> --}}
    <!-- End Recent Activity -->

    <!-- Budget Report -->
    {{-- <div class="card">
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
            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

            <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                        legend: {
                            data: ['Allocated Budget', 'Actual Spending']
                        },
                        radar: {
                            // shape: 'circle',
                            indicator: [{
                                name: 'Sales',
                                max: 6500
                            },
                            {
                                name: 'Administration',
                                max: 16000
                            },
                            {
                                name: 'Information Technology',
                                max: 30000
                            },
                            {
                                name: 'Customer Support',
                                max: 38000
                            },
                            {
                                name: 'Development',
                                max: 52000
                            },
                            {
                                name: 'Marketing',
                                max: 25000
                            }
                            ]
                        },
                        series: [{
                            name: 'Budget vs spending',
                            type: 'radar',
                            data: [{
                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                name: 'Allocated Budget'
                            },
                            {
                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                name: 'Actual Spending'
                            }
                            ]
                        }]
                    });
                });
            </script>

        </div>
    </div> --}}
    <!-- End Budget Report -->

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
            <h5 class="card-title">News &amp; Updates</h5>

            <div class="news">

                @foreach ($artikels as $item)
                        <div class="post-item clearfix">
                            <img src="{{ asset('storage/'. $item->gambar_artikel ) }}" alt="">
                            <h4><a href="{{ route('detail', $item->slug) }}">{{ $item->judul }}</a></h4>
                            <p>{!! \Illuminate\Support\Str::words($item->deskripsi, 50,'....') !!}</p>
                        </div>
                @endforeach

            </div><!-- End sidebar recent posts-->

        </div>
    </div><!-- End News & Updates -->

</div>
<!-- End Right side columns -->


@endsection
