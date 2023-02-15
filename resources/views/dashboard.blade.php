<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brebow || Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin\vendor\fontawesome-free\css\all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin\css\sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{ asset('images\White-Background-Icon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images\White-Background-Icon.png') }}" rel="apple-touch-icon">

    <style>
        #rowAdder {
            margin-bottom: 12px;
        }

        #rowAdder1 {
            margin-bottom: 12px;
        }

        #rowAdder2 {
            margin-bottom: 12px;
        }

        #rowAdder4 {
            margin-bottom: 12px;
        }

        #rowAdder5 {
            margin-bottom: 12px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('brebow-index')}}">
                
                <div class="sidebar-brand-text">
                    <img src="{{asset('images\White Background Logotype.png')}}" height="28">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Update Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data</h6>
                        <a class="collapse-item" href="{{ route('alldata') }}">All Data</a>
                        {{-- <a class="collapse-item" href="cards.html">Cards</a> --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Addons
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> --}}

                        <!-- Nav Item - Messages -->
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> --}}

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    @Auth {{Auth::user()->name}} @endAuth
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div> --}}
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary ml-4"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</button>
                                </form>
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a> --}}
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>
                    
                    <br>

                    <div class="mt-4">
                        <h1>Add Home Videos and Info Details</h1>
                        <form method="post" action="{{ route('home-video') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Gif/Clip</label>
                                <input type="file" name="gif" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Video</label>
                                <input type="file" name="video" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" name="title" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Home Video Info Col1</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                            id="DeleteRow1" type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="text"
                                        class="form-control" name="col1[]" value="">
                                </div>
                                <div id="newinput1"></div>
                                <button id="rowAdder1" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Home Video Info Col2</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                            id="DeleteRow2" type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="text"
                                        class="form-control" name="col2[]" value="">
                                </div>
                                <div id="newinput2"></div>
                                <button id="rowAdder2" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <br>

                    <div class="mt-4">
                        <h1>Add Home Single Videos and Info Details</h1>
                        <form method="post" action="{{ route('home-single-video') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Gif/Clip</label>
                                <input type="file" name="gif" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Video</label>
                                <input type="file" name="video" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" name="title" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Home Video Info Col1</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                            id="DeleteRow4" type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="text"
                                        class="form-control" name="col1[]" value="">
                                </div>
                                <div id="newinput4"></div>
                                <button id="rowAdder4" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Home Video Info Col1</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                            id="DeleteRow5" type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="text"
                                        class="form-control" name="col1[]" value="">
                                </div>
                                <div id="newinput5"></div>
                                <button id="rowAdder5" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    
                    
                    <br>

                    <div class="mt-4">
                        <h1>Add Archives Info</h1>
                        <form method="post" action="{{ route('archives') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Project</label>
                                <input type="text" name="year" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">client</label>
                                <input type="text" name="client" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Agency</label>
                                <input type="text" name="project" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">industry</label>
                                <input type="text" name="industry" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Gif</label>
                                <input type="file" name="gif" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Video</label>
                                <input type="file" name="video" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" name="title" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Home Video Info Col1</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                            id="DeleteRow6" type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="text"
                                        class="form-control" name="col1[]" value="">
                                </div>
                                <div id="newinput6"></div>
                                <button id="rowAdder6" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Home Video Info Col1</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger"
                                            id="DeleteRow7" type="button">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </div>
                                    <input type="text"
                                        class="form-control" name="col1[]" value="">
                                </div>
                                <div id="newinput7"></div>
                                <button id="rowAdder7" type="button"
                                    class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <br><br>
                    
                    <div class="mt-4">
                        <h1>Add Contact Info</h1>
                        <form method="post" action="{{ route('contacts') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" name="title" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">About</label>
                                <input type="text" name="desc" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">About Preview Video</label>
                              <input type="file" name="about_video" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                              
                            </div>
                            {{-- <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Contact</label>
                              <input type="text" name="contact" value="" class="form-control" id="exampleInputPassword1" required>
                            </div> --}}

                            <div class="mb-3">
                                
                                        <label for="exampleInputPassword1" class="form-label">Expertise</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-danger"
                                                    id="DeleteRow" type="button">
                                                    <i class="bi bi-trash"></i>
                                                    Delete
                                                </button>
                                            </div>
                                            <input type="text"
                                                class="form-control" name="expertise[]" value="">
                                        </div>
                                    
                 
                                    <div id="newinput"></div>
                                    <button id="rowAdder" type="button"
                                        class="btn btn-dark">
                                        <span class="bi bi-plus-square-dotted">
                                        </span> ADD
                                    </button>
                                {{-- </div> --}}
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <br><br>

                    {{-- <div class="mt-4">
                        <h1>Add About Info</h1>
                        <form method="post" action="{{ route('clients') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Client</label>
                                <input type="text" name="client" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> --}}

                    <br><br>

                    {{-- <div class="mt-4">
                        <h1>Add Capabilities Info</h1>
                        <form method="post" action="{{ route('partners') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" name="title" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <input type="text" name="desc" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> --}}

                    <br><br>

                    {{-- <div class="mt-4">
                        <h1>Add Send Love Letter Info</h1>
                        <form method="post" action="{{ route('letters') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                <input type="text" name="address" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" name="email" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Social Link</label>
                                <input type="text" name="link" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contact</label>
                                <input type="text" name="contact" value="" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> --}}

                    <br><br>

                    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit">
                        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin\vendor\jquery\jquery.min.js')}}"></script>
    <script src="{{asset('admin\vendor\bootstrap\js\bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin\vendor\jquery-easing\jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin\js\sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin\vendor\chart.js\Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin\js\demo\chart-area-demo.js')}}"></script>
    <script src="{{asset('admin\js\demo\chart-pie-demo.js')}}"></script>

    <script type="text/javascript">
 
        $("#rowAdder").click(function () {
            newRowAdd =
            '<div id="row"> <div class="input-group mb-3">' +
            '<div class="input-group-prepend">' +
            '<button class="btn btn-danger" id="DeleteRow" type="button">' +
            '<i class="bi bi-trash"></i> Delete</button> </div>' +
            '<input type="text" class="form-control" name="expertise[]"  value=""> </div> </div>';
 
            $('#newinput').append(newRowAdd);
        });
 
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>

<script type="text/javascript">
 
    $("#rowAdder1").click(function () {
        newRowAdd =
        '<div id="row1"> <div class="input-group mb-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow1" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control" name="col1[]"  value=""> </div> </div>';

        $('#newinput1').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow1", function () {
        $(this).parents("#row1").remove();
    })
</script>


<script type="text/javascript">
 
    $("#rowAdder2").click(function () {
        newRowAdd =
        '<div id="row2"> <div class="input-group mb-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow2" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control" name="col2[]"  value=""> </div> </div>';

        $('#newinput2').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow2", function () {
        $(this).parents("#row2").remove();
    })
</script>

<script type="text/javascript">
 
    $("#rowAdder4").click(function () {
        newRowAdd =
        '<div id="row4"> <div class="input-group mb-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow4" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control" name="col2[]"  value=""> </div> </div>';

        $('#newinput4').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow2", function () {
        $(this).parents("#row4").remove();
    })
</script>


<script type="text/javascript">
 
    $("#rowAdder5").click(function () {
        newRowAdd =
        '<div id="row5"> <div class="input-group mb-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow5" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control" name="col2[]"  value=""> </div> </div>';

        $('#newinput5').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow5", function () {
        $(this).parents("#row5").remove();
    })
</script>


<script type="text/javascript">
 
    $("#rowAdder6").click(function () {
        newRowAdd =
        '<div id="row6"> <div class="input-group mb-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow6" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control" name="col1[]"  value=""> </div> </div>';

        $('#newinput6').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow6", function () {
        $(this).parents("#row6").remove();
    })
</script>


<script type="text/javascript">
 
    $("#rowAdder7").click(function () {
        newRowAdd =
        '<div id="row7"> <div class="input-group mb-3">' +
        '<div class="input-group-prepend">' +
        '<button class="btn btn-danger" id="DeleteRow7" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div>' +
        '<input type="text" class="form-control" name="col2[]"  value=""> </div> </div>';

        $('#newinput7').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow7", function () {
        $(this).parents("#row7").remove();
    })
</script>
</body>

</html>