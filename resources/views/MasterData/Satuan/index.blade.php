<!-- Main navbar -->
@push('css')
    <script src="{{ asset('template/assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/vendor/tables/datatables/extensions/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/vendor/tables/datatables/extensions/pdfmake/vfs_fonts.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/vendor/tables/datatables/extensions/buttons.min.js') }}"></script>
    <script src="{{ asset('template/assets/demo/pages/datatables_extension_buttons_html5.js') }}"></script>
@endpush
@include('layouts.navbar')

<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    @include('layouts.sidebar')
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            @include('layouts.page_header')
            <!-- /page header -->

            <!-- Centered modal -->
            <div id="modal_centered" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Tambah data</h6>
                            </div>

                            <div class="card-body">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Satuan:</label>
                                        <input type="text" class="form-control" placeholder="Nama Satuan">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi:</label>
                                        <textarea rows="3" cols="3" class="form-control" placeholder="null"></textarea>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <button type="reset" class="btn btn-light">Batal</button>
                                        <button type="submit" class="btn btn-primary ms-3">Simban <i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /centered modal -->

            <!-- Content area -->
            <div class="content">
                <button type="button" class="btn btn-primary btn-labeled btn-labeled-start mb-2" data-bs-toggle="modal"
                    data-bs-target="#modal_centered">
                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                        <i class="icon-database-add"></i>
                    </span>
                    Tambah
                </button>

                <!-- Basic initialization -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Table Satuan</h5>
                    </div>
                    <table class="table datatable-button-html5-basic">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Satuan</th>
                                <th>deskripsi</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['data'] as $key => $satuan)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $satuan['name'] }}</td>
                                    <td>{{ $satuan['description'] ?? '-' }}</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span>
                                    </td>
                                    <td>
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-primary">
                                                <i class="ph-pen"></i>
                                            </a>
                                            <a href="#" class="text-danger mx-2">
                                                <i class="ph-trash"></i>
                                            </a>
                                            <a href="#" class="text-teal">
                                                <i class="ph-gear"></i>
                                            </a>
                                            >>>>>>> fe8f20e8dec3fc3fb5e9079962b3b20250b9fcbf
                                        </div>

                                        <div class="modal-body">
                                            <h6 class="fw-semibold">Text in a modal</h6>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor
                                                ligula, eget lacinia odio sem.
                                                Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis
                                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            </p>

                                            <hr>

                                            <h6 class="fw-semibold">Another paragraph</h6>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis
                                                in, egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis
                                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            </p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                </div>
            </div>
        </div>
        <!-- /centered modal -->




        <!-- Content area -->
        <div class="content">
            <button type="button" class="btn btn-primary btn-labeled btn-labeled-start mb-2" data-bs-toggle="modal"
                data-bs-target="#modal_centered">
                <span class="btn-labeled-icon bg-black bg-opacity-20">
                    <i class="icon-database-add"></i>
                </span>
                Tambah
            </button>
            <button type="button" id="scan-btn" class="btn btn-primary btn-labeled btn-labeled-start mb-2">
                <span class="btn-labeled-icon bg-black bg-opacity-20">
                    <i class="ph-scan ph-2x rounded"></i>
                </span>
                Scan
            </button>
            <!-- Container Scanner -->
            <div id="scanner-container" style="display: none;">
                <button id="close-btn">✖</button>
                <video id="preview"></video>
                <input type="text" id="qrcode-result" class="form-control mt-2" readonly>
            </div>


            <!-- Basic initialization -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Barang</h5>
                </div>

                <table class="table datatable-button-html5-basic">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>name</th>
                            <th>slug</th>
                            <th>deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['data'] as $key => $satuan)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $satuan['name'] }}</td>
                                <td>{{ $satuan['description'] ?? '-' }}</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success">Active</span>
                                </td>
                                <td></td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a href="#" class="text-primary">
                                            <i class="ph-pen"></i>
                                        </a>
                                        <a href="#" class="text-danger mx-2">
                                            <i class="ph-trash"></i>
                                        </a>
                                        <a href="#" class="text-teal">
                                            <i class="ph-gear"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /basic initialization -->






        </div>
        <!-- /content area -->


        <!-- Content area -->




        @include('layouts.footer')


        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>

<!-- /page content -->


<!-- Notifications -->
@include('layouts.components.notifications')

<!-- /notifications -->


<!-- Demo config -->
@include('layouts.components.demo_config')

<!-- /demo config -->

</body>

</html>
