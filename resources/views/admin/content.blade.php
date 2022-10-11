<div>
    <h1 class="h3 mb-1">
        Dashboard
    </h1>
    <p class="fw-medium mb-0 text-muted">
        Welcome, <span style="color: #ff2d6c;">{{ Auth::user()->name }}</span>!!!<a class="fw-medium"
            href="javascript:void(0)"></a>.
    </p>
</div>

</div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <div class="row items-push">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                    <div class="item rounded-3 bg-body mx-auto my-3">
                        <i class="fa fa-users fa-lg text-primary"></i>
                    </div>
                    <div class="fs-1 fw-bold"></div>
                    <div class="text-muted mb-3">{{ $totalcon }}</div>

                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                    <a class="fw-medium" href="{{ url('show_contact') }}">
                        Total Contacts
                        <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                    <div class="item rounded-3 bg-body mx-auto my-3">
                        <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                    </div>
                    <div class="fs-1 fw-bold"></div>
                    <div class="text-muted mb-3">{{ $totalfav }}</div>

                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                    <a class="fw-medium" href="{{ url('favorite_contacts') }}">
                        Favorite Contacts
                        <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                    <div class="item rounded-3 bg-body mx-auto my-3">
                        <i class="fa fa-chart-line fa-lg text-primary"></i>
                    </div>
                    <div class="fs-1 fw-bold"></div>
                    <div class="text-muted mb-3">Read Our Terms & Conditions</div>

                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                    <a class="fw-medium" href="#">
                        Lifetime Asscess
                        <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full">
                    <div class="item rounded-3 bg-body mx-auto my-3">
                        <i class="fa fa-wallet fa-lg text-primary"></i>
                    </div>
                    <div class="fs-1 fw-bold"></div>
                    <div class="text-muted mb-3">End to end encrypted</div>

                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                    <a class="fw-medium" href="{{ url('show_appointment') }}">
                        Safe & Secure
                        <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Overview -->
