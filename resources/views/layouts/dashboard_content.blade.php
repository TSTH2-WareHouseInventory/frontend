 {{-- <!-- Dashboard content -->
 <div class="row">
    <div class="col-xl-8">

        <!-- Marketing campaigns -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Marketing campaigns</h5>
                <div class="d-inline-flex ms-auto">
                    <span class="badge bg-success rounded-pill">28 active</span>
                    <div class="dropdown d-inline-flex ms-3">
                        <a href="#"
                            class="text-body d-inline-flex align-items-center dropdown-toggle"
                            data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-arrows-clockwise me-2"></i>
                                Update data
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-list-dashes me-2"></i>
                                Detailed log
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-chart-line me-2"></i>
                                Statistics
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-eraser me-2"></i>
                                Clear list
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaigns-donut"></div>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">38,289</h5>
                            <span class="text-success ms-2">
                                <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                (+16.2%)
                            </span>
                        </div>
                        <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                        <span class="text-muted">May 12, 12:30 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaign-status-pie"></div>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">2,458</h5>
                            <span class="text-danger ms-2">
                                <i class="ph-arrow-down fs-base lh-base align-top"></i>
                                (-4.9%)
                            </span>
                        </div>
                        <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                        <span class="text-muted">Jun 4, 4:00 am</span>
                    </div>
                </div>

                <div>
                    <a href="#" class="btn btn-indigo">
                        <i class="ph-file-pdf me-2"></i>
                        View report
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th>Campaign</th>
                            <th>Client</th>
                            <th>Changes</th>
                            <th>Budget</th>
                            <th>Status</th>
                            <th class="text-center" style="width: 20px;">
                                <i class="ph-dots-three"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-light">
                            <td colspan="5">Today</td>
                            <td class="text-end">
                                <span class="progress-meter" id="today-progress"
                                    data-progress="30"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/facebook.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold">Facebook</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-primary rounded-pill p-1 me-1"></span>
                                            02:00 - 03:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">Mintlime</span></td>
                            <td><span class="text-success"><i class="ph-trend-up me-2"></i>
                                    2.43%</span></td>
                            <td>
                                <h6 class="mb-0">$5,489</h6>
                            </td>
                            <td><span
                                    class="badge bg-primary bg-opacity-10 text-primary">Active</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/youtube.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Youtube
                                            videos</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                                            13:00 - 14:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">CDsoft</span></td>
                            <td><span class="text-success"><i class="ph-trend-up me-2"></i>
                                    3.12%</span></td>
                            <td>
                                <h6 class="mb-0">$2,592</h6>
                            </td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger">Closed</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/spotify.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Spotify
                                            ads</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-secondary rounded-pill p-1 me-1"></span>
                                            10:00 - 11:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">Diligence</span></td>
                            <td><span class="text-danger"><i class="ph-trend-down me-2"></i>
                                    8.02%</span></td>
                            <td>
                                <h6 class="mb-0">$1,268</h6>
                            </td>
                            <td><span class="badge bg-secondary bg-opacity-10 text-secondary">On
                                    hold</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/twitter.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Twitter
                                            ads</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-secondary rounded-pill p-1 me-1"></span>
                                            04:00 - 05:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">Deluxe</span></td>
                            <td><span class="text-success"><i class="ph-trend-up me-2"></i>
                                    2.78%</span></td>
                            <td>
                                <h6 class="mb-0">$7,467</h6>
                            </td>
                            <td><span class="badge bg-secondary bg-opacity-10 text-secondary">On
                                    hold</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="table-light">
                            <td colspan="5">Yesterday</td>
                            <td class="text-end">
                                <span class="progress-meter" id="yesterday-progress"
                                    data-progress="65"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/bing.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Bing
                                            campaign</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                                            15:00 - 16:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">Metrics</span></td>
                            <td><span class="text-danger"><i class="ph-trend-down me-2"></i>
                                    5.78%</span></td>
                            <td>
                                <h6 class="mb-0">$970</h6>
                            </td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success">Pending</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/amazon.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Amazon
                                            ads</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                                            18:00 - 19:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">Blueish</span></td>
                            <td><span class="text-success"><i class="ph-trend-up me-2"></i>
                                    6.79%</span></td>
                            <td>
                                <h6 class="mb-0">$1,540</h6>
                            </td>
                            <td><span
                                    class="badge bg-primary bg-opacity-10 text-primary">Active</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{ asset('template/assets/images/brands/dribbble.svg') }}"
                                            class="rounded-circle" width="36"
                                            height="36" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Dribbble
                                            ads</a>
                                        <div class="text-muted fs-sm">
                                            <span
                                                class="d-inline-block bg-primary rounded-pill p-1 me-1"></span>
                                            20:00 - 21:00
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-muted">Teamable</span></td>
                            <td><span class="text-danger"><i class="ph-trend-down me-2"></i>
                                    9.83%</span></td>
                            <td>
                                <h6 class="mb-0">$8,350</h6>
                            </td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger">Closed</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-line me-2"></i>
                                            View statement
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-pencil me-2"></i>
                                            Edit campaign
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-lock-key me-2"></i>
                                            Disable campaign
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-gear me-2"></i>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /marketing campaigns -->


        <!-- Quick stats boxes -->
        <div class="row">
            <div class="col-lg-4">

                <!-- Members online -->
                <div class="card bg-teal text-white">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3 class="mb-0">3,450</h3>
                            <span
                                class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+53,6%</span>
                        </div>

                        <div>
                            Members online
                            <div class="fs-sm opacity-75">489 avg</div>
                        </div>
                    </div>

                    <div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
                </div>
                <!-- /members online -->

            </div>

            <div class="col-lg-4">

                <!-- Current server load -->
                <div class="card bg-pink text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">49.4%</h3>
                            <div class="dropdown d-inline-flex ms-auto">
                                <a href="#"
                                    class="text-white d-inline-flex align-items-center dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-arrows-clockwise me-2"></i>
                                        Update data
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-list-dashes me-2"></i>
                                        Detailed log
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-chart-line me-2"></i>
                                        Statistics
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eraser me-2"></i>
                                        Clear list
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            Current server load
                            <div class="fs-sm opacity-75">34.6% avg</div>
                        </div>
                    </div>

                    <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                </div>
                <!-- /current server load -->

            </div>

            <div class="col-lg-4">

                <!-- Today's revenue -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0">$18,390</h3>
                            <div class="ms-auto">
                                <a class="text-white" data-card-action="reload">
                                    <i class="ph-arrows-clockwise"></i>
                                </a>
                            </div>
                        </div>

                        <div>
                            Today's revenue
                            <div class="fs-sm opacity-75">$37,578 avg</div>
                        </div>
                    </div>

                    <div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
                </div>
                <!-- /today's revenue -->

            </div>
        </div>
        <!-- /quick stats boxes -->


        <!-- Support tickets -->
        <div class="card">
            <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                <h5 class="py-sm-2 my-sm-1">Support tickets</h5>
                <div class="mt-2 mt-sm-0 ms-sm-auto">
                    <select class="form-select">
                        <option value="val1" selected>June, 29 - July, 5</option>
                        <option value="val2">June, 22 - June 28</option>
                        <option value="val3">June, 15 - June, 21</option>
                        <option value="val4">June, 8 - June, 14</option>
                    </select>
                </div>
            </div>

            <div
                class="card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap">
                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <div id="tickets-status"></div>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">14,327</h5>
                            <span class="text-success ms-2">
                                <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                (+2.9%)
                            </span>
                        </div>
                        <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                        <span class="text-muted">Jun 16, 10:00 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <a href="#"
                        class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                        <i class="ph-folders"></i>
                    </a>
                    <div class="ms-3">
                        <h5 class="mb-0">1,132</h5>
                        <span class="text-muted">total tickets</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <a href="#"
                        class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                        <i class="ph-arrow-arc-left"></i>
                    </a>
                    <div class="ms-3">
                        <h5 class="mb-0">06:25:00</h5>
                        <span class="text-muted">response time</span>
                    </div>
                </div>

                <button type="button" class="btn btn-light">
                    <i class="ph-file-pdf me-2"></i>
                    Report
                </button>
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th style="width: 50px">Due</th>
                            <th style="width: 300px;">User</th>
                            <th>Description</th>
                            <th class="text-center" style="width: 20px;">
                                <i class="ph-dots-three"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-light">
                            <td colspan="3">Active tickets</td>
                            <td class="text-end">
                                <span class="badge bg-primary rounded-pill">24</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <h6 class="mb-0">12</h6>
                                <div class="fs-sm text-muted lh-1">hours</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#"
                                        class="d-inline-flex align-items-center justify-content-center bg-teal text-white lh-1 rounded-pill w-40px h-40px me-3">
                                        <span class="letter-icon"></span>
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Annabelle
                                            Doney</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-danger rounded-pill p-1 me-2"></span>
                                            Blocker
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div class="fw-semibold">[#1183] Workaround for OS X selects
                                        printing bug</div>
                                    <span class="text-muted">Chrome fixed the bug several versions
                                        ago, thus rendering this...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <h6 class="mb-0">16</h6>
                                <div class="fs-sm text-muted lh-1">hours</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/users/face15.jpg') }}"
                                            class="rounded-circle" width="40"
                                            height="40" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Chris
                                            Macintyre</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-primary rounded-pill p-1 me-2"></span>
                                            Medium
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div class="fw-semibold">[#1249] Vertically center carousel
                                        controls</div>
                                    <span class="text-muted">Try any carousel control and reduce
                                        the screen width below...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <h6 class="mb-0">20</h6>
                                <div class="fs-sm text-muted lh-1">hours</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#"
                                        class="d-inline-flex align-items-center justify-content-center bg-primary text-white lh-1 rounded-pill w-40px h-40px me-3">
                                        <span class="letter-icon"></span>
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Robert
                                            Hauber</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-primary rounded-pill p-1 me-2"></span>
                                            Medium
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div class="fw-semibold">[#1254] Inaccurate small pagination
                                        height</div>
                                    <span class="text-muted">The height of pagination elements is
                                        not consistent with...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <h6 class="mb-0">40</h6>
                                <div class="fs-sm text-muted lh-1">hours</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#"
                                        class="d-inline-flex align-items-center justify-content-center bg-warning text-white lh-1 rounded-pill w-40px h-40px me-3">
                                        <span class="letter-icon"></span>
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Robert
                                            Hauber</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-warning rounded-pill p-1 me-2"></span>
                                            High
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div class="fw-semibold">[#1184] Round grid column gutter
                                        operations</div>
                                    <span class="text-muted">Left rounds up, right rounds down.
                                        should keep everything...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="table-light">
                            <td colspan="3">Resolved tickets</td>
                            <td class="text-end">
                                <span class="badge bg-success rounded-pill">42</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <i class="ph-check text-success"></i>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#"
                                        class="d-inline-flex align-items-center justify-content-center bg-success text-white lh-1 rounded-pill w-40px h-40px me-3">
                                        <span class="letter-icon"></span>
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Alan
                                            Macedo</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-danger rounded-pill p-1 me-2"></span>
                                            Blocker
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div>[#1046] Avoid some unnecessary HTML string</div>
                                    <span class="text-muted">Rather than building a string of HTML
                                        and then parsing it...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <i class="ph-check text-success"></i>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#"
                                        class="d-inline-flex align-items-center justify-content-center bg-pink text-white lh-1 rounded-pill w-40px h-40px me-3">
                                        <span class="letter-icon"></span>
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Brett
                                            Castellano</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-success rounded-pill p-1 me-2"></span>
                                            Low
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div>[#1038] Update json configuration</div>
                                    <span class="text-muted">The <code>files</code> property is
                                        necessary to override the files property...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <i class="ph-check text-success"></i>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/users/face3.jpg') }}"
                                            class="rounded-circle" width="40"
                                            height="40" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Roxanne
                                            Forbes</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-success rounded-pill p-1 me-2"></span>
                                            Low
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div>[#1034] Tooltip multiple event</div>
                                    <span class="text-muted">Fix behavior when using tooltips and
                                        popovers that are...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="table-light">
                            <td colspan="3">Closed tickets</td>
                            <td class="text-end">
                                <span class="badge bg-danger rounded-pill">37</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <i class="ph-checks text-danger"></i>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/users/face8.jpg') }}"
                                            class="rounded-circle" width="40"
                                            height="40" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="text-body fw-semibold">Mitchell
                                            Sitkin</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-warning rounded-pill p-1 me-2"></span>
                                            High
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div>[#1040] Account for static form controls in form group
                                    </div>
                                    <span class="text-muted">Resizes control label's font-size and
                                        account for the standard...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">
                                <i class="ph-checks text-danger"></i>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#"
                                        class="d-inline-flex align-items-center justify-content-center bg-indigo text-white lh-1 rounded-pill w-40px h-40px me-3">
                                        <span class="letter-icon"></span>
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Katleen
                                            Jensen</a>
                                        <div class="d-flex align-items-center text-muted fs-sm">
                                            <span class="bg-primary rounded-pill p-1 me-2"></span>
                                            Medium
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-body">
                                    <div>[#1038] Proper sizing of form control feedback</div>
                                    <span class="text-muted">Feedback icon sizing inside a
                                        larger/smaller form-group...</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="text-body"
                                        data-bs-toggle="dropdown">
                                        <i class="ph-list"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-arrow-bend-up-left me-2"></i>
                                            Quick reply
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-clock-counter-clockwise me-2"></i>
                                            Full history
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-checks text-success me-2"></i>
                                            Resolve issue
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-x text-danger me-2"></i>
                                            Close issue
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /support tickets -->


        <!-- Latest posts -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Latest posts</h5>
            </div>

            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="d-sm-flex align-items-sm-start mb-3">
                            <a href="#"
                                class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                                <img src="{{ asset('template/assets/images/demo/flat/1.png') }}"
                                    class="flex-shrink-0 rounded" height="100"
                                    alt="">
                                <div
                                    class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span
                                    class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">12:25</span>
                            </a>

                            <div class="flex-fill">
                                <h6 class="mb-1"><a href="#">Up unpacked friendly</a>
                                </h6>
                                <ul class="list-inline list-inline-bullet text-muted mb-2">
                                    <li class="list-inline-item"><a href="#"
                                            class="text-body">Video tutorials</a></li>
                                </ul>
                                The him father parish looked has sooner. Attachment frequently
                                terminated son hello...
                            </div>
                        </div>

                        <div class="d-sm-flex align-items-sm-start mb-3">
                            <a href="#"
                                class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                                <img src="{{ asset('template/assets/images/demo/flat/21.png') }}"
                                    class="flex-shrink-0 rounded" height="100"
                                    alt="">
                                <div
                                    class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span
                                    class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">47:25</span>
                            </a>

                            <div class="flex-fill">
                                <h6 class="mb-1"><a href="#">It allowance prevailed</a>
                                </h6>
                                <ul class="list-inline list-inline-bullet text-muted mb-2">
                                    <li class="list-inline-item"><a href="#"
                                            class="text-body">Video tutorials</a></li>
                                </ul>
                                Alteration literature to or an sympathize mr imprudence. Of is
                                ferrars subject enjoyed...
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="d-sm-flex align-items-sm-start mb-3">
                            <a href="#"
                                class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                                <img src="{{ asset('template/assets/images/demo/flat/12.png') }}"
                                    class="flex-shrink-0 rounded" height="100"
                                    alt="">
                                <div
                                    class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span
                                    class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">48:40</span>
                            </a>

                            <div class="flex-fill">
                                <h6 class="mb-1"><a href="#">Case read they must</a>
                                </h6>
                                <ul class="list-inline list-inline-bullet text-muted mb-2">
                                    <li class="list-inline-item"><a href="#"
                                            class="text-body">Video tutorials</a></li>
                                </ul>
                                On it differed repeated wandered required in. Then girl neat why yet
                                knew rose spot...
                            </div>
                        </div>

                        <div class="d-sm-flex align-items-sm-start mb-3">
                            <a href="#"
                                class="d-inline-block position-relative me-sm-3 mb-3 mb-sm-0">
                                <img src="{{ asset('template/assets/images/demo/flat/18.png') }}"
                                    class="flex-shrink-0 rounded" height="100"
                                    alt="">
                                <div
                                    class="d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2">
                                    <i class="ph-play"></i>
                                </div>
                                <span
                                    class="bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2">22:14</span>
                            </a>

                            <div class="flex-fill">
                                <h6 class="mb-1"><a href="#">Consider now provided</a>
                                </h6>
                                <ul class="list-inline list-inline-bullet text-muted mb-2">
                                    <li class="list-inline-item"><a href="#"
                                            class="text-body">Video tutorials</a></li>
                                </ul>
                                Marianne or husbands if at stronger ye. Considered is as middletons
                                uncommonly...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /latest posts -->

    </div>

    <div class="col-xl-4">

        <!-- Progress counters -->
        <div class="row">
            <div class="col-sm-6">

                <!-- Available hours -->
                <div class="card text-center">
                    <div class="card-body">

                        <!-- Progress counter -->
                        <div class="svg-center" id="hours-available-progress"></div>
                        <!-- /progress counter -->


                        <!-- Bars -->
                        <div id="hours-available-bars"></div>
                        <!-- /bars -->

                    </div>
                </div>
                <!-- /available hours -->

            </div>

            <div class="col-sm-6">

                <!-- Productivity goal -->
                <div class="card text-center">
                    <div class="card-body">

                        <!-- Progress counter -->
                        <div class="svg-center" id="goal-progress"></div>
                        <!-- /progress counter -->

                        <!-- Bars -->
                        <div id="goal-bars"></div>
                        <!-- /bars -->

                    </div>
                </div>
                <!-- /productivity goal -->

            </div>
        </div>
        <!-- /progress counters -->


        <!-- Daily sales -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Daily sales stats</h5>
                <div class="d-flex align-items-center ms-auto">
                    <span class="fw-bold text-success">$4,378</span>
                    <div class="dropdown d-inline-flex ms-3">
                        <a href="#"
                            class="text-body d-inline-flex align-items-center dropdown-toggle"
                            data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-arrows-clockwise me-2"></i>
                                Update data
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-list-dashes me-2"></i>
                                Detailed log
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-chart-line me-2"></i>
                                Statistics
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-eraser me-2"></i>
                                Clear list
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="chart" id="sales-heatmap"></div>
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-100">Application</th>
                            <th>Time</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/logos/1.svg') }}"
                                            alt="" height="36">
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Sigma
                                            application</a>
                                        <div class="text-muted fs-sm">New order</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-muted">06:28 pm</span>
                            </td>
                            <td>
                                <strong>$49.90</strong>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/logos/2.svg') }}"
                                            alt="" height="36">
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Alpha
                                            application</a>
                                        <div class="text-muted fs-sm">Renewal</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-muted">04:52 pm</span>
                            </td>
                            <td>
                                <strong>$90.50</strong>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/logos/3.svg') }}"
                                            alt="" height="36">
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Delta
                                            application</a>
                                        <div class="text-muted fs-sm">Support</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-muted">01:26 pm</span>
                            </td>
                            <td>
                                <strong>$60.00</strong>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/logos/4.svg') }}"
                                            alt="" height="36">
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Omega
                                            application</a>
                                        <div class="text-muted fs-sm">Support</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-muted">11:46 am</span>
                            </td>
                            <td>
                                <strong>$55.00</strong>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="d-inline-block me-3">
                                        <img src="{{ asset('template/assets/images/demo/logos/2.svg') }}"
                                            alt="" height="36">
                                    </a>
                                    <div>
                                        <a href="#"
                                            class="text-body fw-semibold letter-icon-title">Alpha
                                            application</a>
                                        <div class="text-muted fs-sm">Renewal</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-muted">10:29 am</span>
                            </td>
                            <td>
                                <strong>$90.50</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /daily sales -->


        <!-- My messages -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">My messages</h5>
                <div class="ms-auto">
                    <span><i class="ph-clock-counter-clockwise me-1"></i> Jul 7, 10:30</span>
                    <span class="badge bg-success ms-3">Online</span>
                </div>
            </div>

            <!-- Numbers -->
            <div class="card-body pb-0">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="mb-0">2,345</h5>
                            <span class="text-muted fs-sm">this week</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="mb-0">3,568</h5>
                            <span class="text-muted fs-sm">this month</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="mb-0">32,693</h5>
                            <span class="text-muted fs-sm">all messages</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /numbers -->


            <!-- Area chart -->
            <div id="messages-stats"></div>
            <!-- /area chart -->


            <!-- Tabs -->
            <ul class="nav nav-tabs nav-tabs-underline nav-justified">
                <li class="nav-item">
                    <a href="#messages-tue" class="nav-link active" data-bs-toggle="tab">
                        Tuesday
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#messages-mon" class="nav-link" data-bs-toggle="tab">
                        Monday
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#messages-fri" class="nav-link" data-bs-toggle="tab">
                        Friday
                    </a>
                </li>
            </ul>
            <!-- /tabs -->


            <!-- Tabs content -->
            <div class="tab-content card-body">
                <div class="tab-pane active fade show" id="messages-tue">
                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face10.jpg') }}"
                            class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-success"></span>
                            <span
                                class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill">5</span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">James Alexander</a>
                                </div>
                                <span class="fs-sm text-muted">14:58</span>
                            </div>

                            Who knows, maybe that would be the best thing for me...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face3.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-danger"></span>
                            <span
                                class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill">4</span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Margo Baker</a></div>
                                <span class="fs-sm text-muted">12:16</span>
                            </div>

                            That was something he was unable to do because...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face24.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Jeremy Victorino</a>
                                </div>
                                <span class="fs-sm text-muted">22:48</span>
                            </div>

                            But that would be extremely strained and suspicious...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face4.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Beatrix Diaz</a>
                                </div>
                                <span class="fs-sm text-muted">Tue</span>
                            </div>

                            What a strenuous career it is that I've chosen...
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face25.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Beatrix Diaz</a>
                                </div>
                                <span class="fs-sm text-muted">Tue</span>
                            </div>

                            Amidst roadrunner distantly pompously where...
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="messages-mon">
                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face2.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Isak Temes</a></div>
                                <span class="fs-sm text-muted">Tue, 19:58</span>
                            </div>

                            Reasonable palpably rankly expressly grimy...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face7.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Vittorio Cosgrove</a>
                                </div>
                                <span class="fs-sm text-muted">Tue, 16:35</span>
                            </div>

                            Arguably therefore more unexplainable fumed...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('template/assets/images/demo/users/face18.jpg') }}"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Hilary Talaugon</a>
                                </div>
                                <span class="fs-sm text-muted">Tue, 12:16</span>
                            </div>

                            Nicely unlike porpoise a kookaburra past more...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face14.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Bobbie Seber</a>
                                </div>
                                <span class="fs-sm text-muted">Tue, 09:20</span>
                            </div>

                            Before visual vigilantly fortuitous tortoise...
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face8.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Walther Laws</a>
                                </div>
                                <span class="fs-sm text-muted">Tue, 03:29</span>
                            </div>

                            Far affecting more leered unerringly dishonest...
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="messages-fri">
                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face15.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Owen Stretch</a>
                                </div>
                                <span class="fs-sm text-muted">Fri, 18:12</span>
                            </div>

                            Tardy rattlesnake seal raptly earthworm...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face12.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-warning"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Jenilee Mcnair</a>
                                </div>
                                <span class="fs-sm text-muted">Fri, 14:03</span>
                            </div>

                            Since hello dear pushed amid darn trite...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face22.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-danger"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Alaster Jain</a>
                                </div>
                                <span class="fs-sm text-muted">Fri, 13:59</span>
                            </div>

                            Dachshund cardinal dear next jeepers well...
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face24.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-secondary"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Sigfrid Thisted</a>
                                </div>
                                <span class="fs-sm text-muted">Fri, 09:26</span>
                            </div>

                            Lighted wolf yikes less lemur crud grunted...
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="status-indicator-container me-3">
                            <img src="{{ asset('face') }}../../../assets/images/demo/users/face17.jpg"
                                class="rounded-circle" width="40" jeight="40"
                                alt="">
                            <span class="status-indicator bg-secondary"></span>
                        </div>

                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-semibold"><a href="#">Sherilyn Mckee</a>
                                </div>
                                <span class="fs-sm text-muted">Fri, 06:38</span>
                            </div>

                            Less unicorn a however careless husky...
                        </div>
                    </div>
                </div>
            </div>
            <!-- /tabs content -->

        </div>
        <!-- /my messages -->


        <!-- Daily financials -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Daily financials</h5>
                <div class="ms-auto">
                    <label class="form-check form-switch form-check-reverse">
                        <input type="checkbox" class="form-check-input" id="realtime"
                            checked>
                        <span class="form-check-label">Realtime</span>
                    </label>
                </div>
            </div>

            <div class="card-body">
                <div class="chart mb-3" id="bullets"></div>

                <div class="d-flex mb-3">
                    <div class="me-3">
                        <div class="bg-pink bg-opacity-10 text-pink lh-1 rounded-pill p-2">
                            <i class="ph-chart-line"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        Stats for July, 6: <span class="fw-semibold">1938</span> orders, $4220
                        revenue
                        <div class="text-muted fs-sm">2 hours ago</div>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div class="me-3">
                        <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                            <i class="ph-check"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        Invoices <a href="#">#4732</a> and <a href="#">#4734</a>
                        have been paid
                        <div class="text-muted fs-sm">Dec 18, 18:36</div>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div class="me-3">
                        <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                            <i class="ph-users"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        Affiliate commission for June has been paid
                        <div class="text-muted fs-sm">36 minutes ago</div>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div class="me-3">
                        <div class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2">
                            <i class="ph-arrow-counter-clockwise"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        Order <a href="#">#37745</a> from July, 1st has been refunded
                        <div class="text-muted fs-sm">4 minutes ago</div>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="me-3">
                        <div class="bg-teal bg-opacity-10 text-teal lh-1 rounded-pill p-2">
                            <i class="ph-arrow-bend-double-up-right"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        Invoice <a href="#">#4769</a> has been sent to <a
                            href="#">Robert Smith</a>
                        <div class="text-muted fs-sm">Dec 12, 05:46</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /daily financials -->

    </div>
</div>
<!-- /dashboard content --> --}}
