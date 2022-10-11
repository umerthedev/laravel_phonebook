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
                    class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0    text-center text-md-start">
                    <div class="content">
                        <!-- Elements -->
                        <div class="block block-rounded">
                            <div class="block-content">
                                @if (session()->has('message'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <p id="msg" class="mb-0">{{ session()->get('message') }}!!!</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">X</button>

                                    </div>
                                @endif
                                <h1 class="m-4 " style="text-align: center">Add Contact Info</h1>
                                <h1 class="m-4 " id="flashmsg" style="text-align: center"></h1>


                                <form id="formSubmit">
                                    @csrf
                                    <!-- Basic Elements -->
                                    <div class="">
                                        <div class=" mb-2">
                                            <label class="form-label" for="example-text-input">Name</label>
                                            <input type="text" class="form-control" id="example-text-input"
                                                name="name" placeholder="Full Name" required>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="example-email-input">Email</label>
                                            <input type="text" class="form-control" id="example-email-input"
                                                name="email" placeholder="You can add multiple emails">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="example-email-input">Address</label>
                                            <input type="text" class="form-control" id="example-email-input"
                                                name="address" placeholder="Optional">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="example-email-input">Phone</label>
                                            <input type="text" class="form-control" id="example-email-input"
                                                name="phone" placeholder="You can add multiple phone number" required>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="example-email-input">Facebook ID</label>
                                            <input type="text" class="form-control" id="example-email-input"
                                                name="fb_id" placeholder="Optional">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="example-email-input">Instagram ID</label>
                                            <input type="text" class="form-control" id="example-email-input"
                                                name="ig_id" placeholder="Optional">
                                        </div>

                                        <div class="row push">
                                            <div class="col-lg-8 col-xl-5 overflow-hidden">
                                                <div class="mb-2">
                                                    <label class="form-label" for="example-file-input">File
                                                        Input</label>
                                                    <input class="form-control" type="file" name="file" required>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-secondary bg-dark mb-4"
                                            id="btnSubmit">Submit</button>

                                </form>


                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $("#formSubmit").submit(function(event) {
                                event.preventDefault();
                                var form = $("#formSubmit")[0];
                                var data = new FormData(form);
                                $("#btnSubmit").prop("disabled", true);
                                $.ajax({
                                    type: "POST",
                                    enctype: 'multipart/form-data',
                                    url: "{{ url('upload_contact') }}",
                                    data: data,
                                    processData: false,
                                    contentType: false,
                                    cache: false,
                                    success: function(data) {
                                        $("#flashmsg").text(data.success);
                                        $("#btnSubmit").prop("disabled", false);
                                        $("input[type=text],input[type=email],input[type=file]").val("");

                                    },
                                    error: function(e) {
                                        $("#flashmsg").text(e.responseText);
                                        $("#btnSubmit").prop("disabled", false);
                                        $("input[type=text],input[type=email]").val("");
                                    }
                                });
                            })
                        })
                    </script>



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
