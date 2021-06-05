<div class="navbar-header">
    <div class="d-flex">

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top">
                    Admin Panel
                </a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>

    <div class="d-flex">

        <div class="dropdown d-inline-block language-switch">
            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img src="{{ asset('admin/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
            </button>
            <div class="dropdown-menu dropdown-menu-end">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('admin/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1"
                        height="12">
                    <span class="align-middle">Spanish</span>
                </a>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-angle-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <div class="px-lg-2">
                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ asset('admin/assets/images/brands/github.png') }}" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ asset('admin/assets/images/brands/dribbble.png') }}" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>

                    </div>

                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ asset('admin/assets/images/brands/dribbble.png') }}" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ asset('admin/assets/images/brands/dribbble.png') }}" alt="mail_chimp">
                                <span>Mail Chimp</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                <i class="fas fa-expand-arrows-alt"></i>
            </button>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-flag fa-xm"></i>
                <span class="badge bg-danger rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="m-0 font-size-16"> Notifications </h5>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small"> Mark all as read</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="uil-shopping-basket"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Your order is placed</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs"
                                    alt="user-pic">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">James Lemire</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">It will seem like simplified English.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="uil-truck"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Your item is shipped</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs"
                                    alt="user-pic">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Salena Layfield</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.
                                    </p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 border-top">
                    <div class="d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="" aria-expanded="false">

                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                <img class="rounded-circle header-profile-user" src="{{ Auth::user()->getFirstMediaUrl()}}" alt="">
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"><i
                        class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                        class="align-middle">View Profile</span></a>
                <a class="dropdown-item" href="#"><i
                        class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span
                        class="align-middle">My Wallet</span></a>
                <a class="dropdown-item d-block" href="#"><i
                        class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
                        class="align-middle">Settings</span> <span
                        class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                <a class="dropdown-item" href="#"><i
                        class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                        class="align-middle">Lock screen</span></a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                        class=" uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                    <span class="align-middle">Sign out</span></a>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
