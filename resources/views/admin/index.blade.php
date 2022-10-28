@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">VPS</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Home Page</p>
                                    <h4 class="mb-2"><a href="{{ route('banner.index') }}" class="text-dark">Banner</a>
                                    </h4>
                                    <p class="text-muted mb-0">
                                        <a href="{{ route('highlights.index') }}" class="text-dark">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i class="ri-home-3-fill me-1 align-middle"></i>
                                                Highlights
                                            </span>
                                            Highlights Change
                                        </a>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-home-3-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Notices and Events</p>
                                    <h4 class="mb-2">
                                        <a href="{{ route('notice.index') }}" class="text-dark">
                                            List Notice
                                        </a>
                                    </h4>
                                    <p class="text-muted mb-0">
                                        <a href="{{ route('events.index') }}" class="text-dark">
                                            <span class="text-danger fw-bold font-size-12 me-2">
                                                <i class="ri-layout-5-line me-1 align-middle"></i>
                                                List Events
                                            </span>
                                            List all Events
                                        </a>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-layout-5-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">About Us Section</p>
                                    <h4 class="mb-2">
                                        <a href="{{ route('about.index') }}" class="text-dark">
                                            About School
                                        </a>
                                    </h4>
                                    <p class="text-muted mb-0">
                                        <a href="{{ route('employee.index') }}" class="text-dark">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i class="ri-shield-user-line me-1 align-middle"></i>
                                                Employees Section
                                            </span>
                                            employees section
                                        </a>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-shield-user-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Important Images Section</p>
                                    <h4 class="mb-2">
                                        <a href="{{ route('important.index') }}" class="text-dark">
                                            Important Images Section
                                        </a>
                                    </h4>
                                    <p class="text-muted mb-0">
                                        <a href="{{ route('important.index') }}" class="text-dark">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i class=" ri-image-add-fill me-1 align-middle"></i>
                                                Important Images
                                            </span>
                                            important images
                                        </a>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class=" ri-image-add-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Mandatory Disclosure</p>
                                    <h4 class="mb-2">
                                        <a href="{{ route('mandatory.index') }}" class="text-dark">
                                            Mandatory Disclosure Section
                                        </a>
                                    </h4>
                                    <p class="text-muted mb-0">
                                        <a href="{{ route('important.index') }}" class="text-dark">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i class="ri-file-paper-2-fill me-1 align-middle"></i>
                                                Mandatory Disclosure
                                            </span>
                                            Mandatory Disclosure
                                        </a>
                                    </p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-file-paper-2-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>
@endsection
