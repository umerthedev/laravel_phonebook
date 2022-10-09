<!doctype html>
<html lang="en">

<head>
    @include('admin.css')

</head>

<body>
    <!-- Page Container -->

    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        @include('admin.overlay')
        <!-- END Side Overlay -->

        <!-- Sidebar -->

        <!-- Sidebar Start -->
        @include('admin/sidebar')
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <div class="content-header">

                @include('admin.header')

            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            @include('admin.search')
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            {{-- <div id="page-header-loader" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <div class="w-100 text-center">
                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
              </div>
            </div>
          </div>
        </div> --}}

            <!-- END Header Loader -->
        </header>
        <!-- END Header -->


        <!-- Main Container -->
        <main id="main-container">
            <div class="content">
                <div
                    class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">

                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block block-rounded">
                        {{-- message-container --}}
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <p class="mb-0">{{ session()->get('message') }}!!!</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close">X</button>
                            </div>
                        @endif
                        {{-- End message-container --}}
                        <div class="block-header block-header-default">
                            <h3 class="block-title" style="text-align: center">
                                All Your Contacts
                            </h3>
                        </div>

                        {{-- <div class="block-content block-content-full">
                            <div class="form-outline mb-4">
                                <input placeholder="Search by name, email, phone, FB_ID Or IG_ID" type="search"
                                    class="form-control" id="datatable-search-input">
                                <label class="form-label" for="datatable-search-input"></label>
                            </div>
                            <div id="datatable">
                            </div> --}}
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        {{-- <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons"> --}}
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>FB Links</th>
                                    <th>IG Links</th>
                                    <th>image</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody class="allcont">
                                @foreach ($contact as $con)
                                    <tr>
                                        <td>{{ $con->name }}</td>
                                        <td>{{ $con->phone }}</td>
                                        <td>{{ $con->email }}</td>
                                        <td>{{ $con->address }}</td>
                                        <td>{{ $con->fb_id }}</td>
                                        <td>{{ $con->ig_id }}</td>
                                        <td>
                                            <img height="80px" width="80px" src="contactimage/{{ $con->image }}">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('edit_con', $con->id) }}">
                                                    <button type="button" class="btn btn-sm btn-alt-secondary"
                                                        data-bs-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </button></a>
                                                <a href="{{ url('delete_con', $con->id) }}"
                                                    onclick="return confirm('Are You Sure Want To Delete This???')">
                                                    <button type="button" class="btn btn-sm btn-alt-secondary"
                                                        data-bs-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button></a>
                                                <a href="{{ url('delete_con', $con->id) }}"
                                                    onclick="return confirm('Are You Sure Want To Delete This???')">
                                                    <button type="button" class="btn btn-sm btn-alt-secondary"
                                                        data-bs-toggle="tooltip" title="Add Favorite">
                                                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                    </button></a>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                            <tbody id="tbody" class="searchdat"></tbody>
                        </table>
                        {{-- <div class="dataTables_info">
                                {!! $con->links() !!}
                            </div> --}}
                        <script type="text/javascript">
                            $('#datatable-search-input').on('keyup', function() {
                                $value = $(this).val();
                                if ($value) {
                                    $('.allcont').hide();
                                    $('.searchdat').show();

                                } else {
                                    $('.allcont').show();
                                    $('.searchdat').hide();
                                }

                                $.ajax({
                                    type: 'get',
                                    url: '{{ URL::to('search_contact') }}',
                                    data: {
                                        'search': $value
                                    },
                                    success: function(data) {

                                        if (data != "") {
                                            $('#tbody').html(data);
                                        } else {
                                            $('#tbody').text("Data not found !!!");
                                        }
                                    }
                                });
                            })
                        </script>
                    </div>
                </div>
                <!-- END Dynamic Table with Export Buttons -->

            </div>
    </div>

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    @include('admin/footer')
    <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    @include('admin/script')
</body>

</html>
