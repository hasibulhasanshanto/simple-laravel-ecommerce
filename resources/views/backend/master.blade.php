<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/backend/images')}}/favicon.png" />

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/css/plugins/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/plugins/simple-line-icons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Style Css -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <!-- Main Css -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend.includes.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image"> <img src="{{ asset('/backend/images')}}/faces/face4.jpg"
                                    alt="image" /> <span class="online-status online"></span> </div>
                            <div class="profile-name">
                                <p class="name">Richard V.Welsh</p>
                                <p class="designation">Manager</p>
                                <div class="badge badge-teal mx-auto mt-3">Online</div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.html"><img class="menu-icon"
                                src="{{ asset('/backend/images')}}/menu_icons/01.png" alt="menu icon"><span
                                class="menu-title">Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/widgets.html"><img class="menu-icon"
                                src="{{ asset('/backend/images')}}/menu_icons/02.png" alt="menu icon"><span
                                class="menu-title">Widgets</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html"><img
                                class="menu-icon" src="{{ asset('/backend/images')}}/menu_icons/03.png"
                                alt="menu icon"><span class="menu-title">Buttons</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html"><img
                                class="menu-icon" src="{{ asset('/backend/images')}}/menu_icons/04.png"
                                alt="menu icon"><span class="menu-title">Form</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html"><img class="menu-icon"
                                src="{{ asset('/backend/images')}}/menu_icons/05.png" alt="menu icon"><span
                                class="menu-title">Charts</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html"><img class="menu-icon"
                                src="{{ asset('/backend/images')}}/menu_icons/06.png" alt="menu icon"><span
                                class="menu-title">Table</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html"><img class="menu-icon"
                                src="{{ asset('/backend/images')}}/menu_icons/07.png" alt="menu icon"> <span
                                class="menu-title">Icons</span></a></li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
                            aria-controls="general-pages"> <img class="menu-icon"
                                src="{{ asset('/backend/images')}}/menu_icons/08.png" alt="menu icon"> <span
                                class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Blank
                                        Page</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Login</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="pages/samples/register.html">Register</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">404</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">500</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html"><img
                                class="menu-icon" src="{{ asset('/backend/images')}}/menu_icons/09.png" alt="menu icon">
                            <span class="menu-title">Typography</span></a></li>
                    <li class="nav-item purchase-button">
                        <a class="nav-link" href="#">Outer Area</a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-cube text-danger icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-text text-right">Total Revenue</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0">$65,650</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-text text-right">Orders</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0">3455</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise
                                        sales
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-poll-box text-teal icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-text text-right">Sales</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0">5693</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-account-location text-info icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="card-text text-right">Employees</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0">246</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Orders</h5>
                                    <div class="table-responsive">
                                        <table class="table center-aligned-table">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0">Order No</th>
                                                    <th class="border-bottom-0">Product Name</th>
                                                    <th class="border-bottom-0">Purchased On</th>
                                                    <th class="border-bottom-0">Shipping Status</th>
                                                    <th class="border-bottom-0">Payment Method</th>
                                                    <th class="border-bottom-0">Payment Status</th>
                                                    <th class="border-bottom-0"></th>
                                                    <th class="border-bottom-0"></th>
                                                    <th class="border-bottom-0"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>034</td>
                                                    <td>Iphone 7</td>
                                                    <td>12 May 2017</td>
                                                    <td>Dispatched</td>
                                                    <td>Credit card</td>
                                                    <td><label class="badge badge-teal">Approved</label></td>
                                                    <td><a href="#" class="btn btn-outline-success btn-sm">View
                                                            Order</a></td>
                                                    <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>035</td>
                                                    <td>Galaxy S8</td>
                                                    <td>15 May 2017</td>
                                                    <td>Dispatched</td>
                                                    <td>Internet banking</td>
                                                    <td><label class="badge badge-warning">Pending</label></td>
                                                    <td><a href="#" class="btn btn-outline-success btn-sm">View
                                                            Order</a></td>
                                                    <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>036</td>
                                                    <td>Amazon Echo</td>
                                                    <td>17 May 2017</td>
                                                    <td>Dispatched</td>
                                                    <td>Credit card</td>
                                                    <td><label class="badge badge-teal">Approved</label></td>
                                                    <td><a href="#" class="btn btn-outline-success btn-sm">View
                                                            Order</a></td>
                                                    <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>037</td>
                                                    <td>Google Pixel</td>
                                                    <td>17 May 2017</td>
                                                    <td>Dispatched</td>
                                                    <td>Cash on delivery</td>
                                                    <td><label class="badge badge-danger">Rejected</label></td>
                                                    <td><a href="#" class="btn btn-outline-success btn-sm">View
                                                            Order</a></td>
                                                    <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>038</td>
                                                    <td>Mac Mini</td>
                                                    <td>19 May 2017</td>
                                                    <td>Dispatched</td>
                                                    <td>Debit card</td>
                                                    <td><label class="badge badge-teal">Approved</label></td>
                                                    <td><a href="#" class="btn btn-outline-success btn-sm">View
                                                            Order</a></td>
                                                    <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Manage Tickets</h5>
                                    <div class="fluid-container">
                                        <div class="row ticket-card mt-3 pb-2 border-bottom">
                                            <div class="col-1">
                                                <img class="img-sm rounded-circle"
                                                    src="{{ asset('/backend/images')}}/faces/face1.jpg"
                                                    alt="profile image">
                                            </div>
                                            <div class="ticket-details col-9">
                                                <div class="d-flex">
                                                    <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">James :
                                                    </p>
                                                    <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                                                    <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit
                                                        amet, consectetur.</p>
                                                </div>
                                                <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Illum sequi a, nostrum.</p>
                                                <div class="row text-muted d-flex">
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Last responded :</p>
                                                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                                                    </div>
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Due in :</p>
                                                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ticket-actions col-2">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-history fa-fw"></i>Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-check text-success fa-fw"></i>Resolve
                                                            Issue</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-times text-danger fa-fw"></i>Close
                                                            Issue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ticket-card mt-3 pb-2 border-bottom">
                                            <div class="col-1">
                                                <img class="img-sm rounded-circle"
                                                    src="{{ asset('/backend/images')}}/faces/face2.jpg"
                                                    alt="profile image">
                                            </div>
                                            <div class="ticket-details col-9">
                                                <div class="d-flex">
                                                    <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Stella :
                                                    </p>
                                                    <p class="font-weight-medium mr-1 mb-0">[#23135]</p>
                                                    <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit
                                                        amet, consectetur adipisicing elit. Sapiente.</p>
                                                </div>
                                                <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Excepturi voluptates fuga quae?</p>
                                                <div class="row text-muted d-flex">
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Last responded :</p>
                                                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                                                    </div>
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Due in :</p>
                                                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ticket-actions col-2">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-history fa-fw"></i>Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-check text-success fa-fw"></i>Resolve
                                                            Issue</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-times text-danger fa-fw"></i>Close
                                                            Issue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ticket-card mt-3 pb-2 border-bottom">
                                            <div class="col-1">
                                                <img class="img-sm rounded-circle"
                                                    src="{{ asset('/backend/images')}}/faces/face3.jpg"
                                                    alt="profile image">
                                            </div>
                                            <div class="ticket-details col-9">
                                                <div class="d-flex">
                                                    <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">John Doe
                                                        :</p>
                                                    <p class="font-weight-medium mr-1 mb-0">[#23246]</p>
                                                    <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit
                                                        amet.</p>
                                                </div>
                                                <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit.</p>
                                                <div class="row text-muted d-flex">
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Last responded :</p>
                                                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                                                    </div>
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Due in :</p>
                                                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ticket-actions col-2">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-history fa-fw"></i>Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-check text-success fa-fw"></i>Resolve
                                                            Issue</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-times text-danger fa-fw"></i>Close
                                                            Issue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ticket-card mt-3 pb-2 border-bottom">
                                            <div class="col-1">
                                                <img class="img-sm rounded-circle"
                                                    src="{{ asset('/backend/images')}}/faces/face4.jpg"
                                                    alt="profile image">
                                            </div>
                                            <div class="ticket-details col-9">
                                                <div class="d-flex">
                                                    <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Marques
                                                        Brownlee :</p>
                                                    <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                                                    <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit
                                                        amet, consectetur.</p>
                                                </div>
                                                <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Illum sequi a, nostrum.</p>
                                                <div class="row text-muted d-flex">
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Last responded :</p>
                                                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                                                    </div>
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Due in :</p>
                                                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ticket-actions col-2">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-history fa-fw"></i>Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-check text-success fa-fw"></i>Resolve
                                                            Issue</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-times text-danger fa-fw"></i>Close
                                                            Issue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ticket-card mt-3 pb-2">
                                            <div class="col-1">
                                                <img class="img-sm rounded-circle"
                                                    src="{{ asset('/backend/images')}}/faces/face5.jpg"
                                                    alt="profile image">
                                            </div>
                                            <div class="ticket-details col-9">
                                                <div class="d-flex">
                                                    <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Marina
                                                        John :</p>
                                                    <p class="font-weight-medium mr-1 mb-0">[#23034]</p>
                                                    <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit
                                                        amet, consectetur adipisicing elit. Quasi amet totam,
                                                        dignissimos fugiat voluptates, ab magni, necessitatibus
                                                        excepturi inventore, mollitia ipsa quaerat aliquam.</p>
                                                </div>
                                                <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae animi omnis, a?</p>
                                                <div class="row text-muted d-flex">
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Last responded :</p>
                                                        <p class="Last-responded mr-2 mb-0">3 hours ago</p>
                                                    </div>
                                                    <div class="col-4 d-flex">
                                                        <p class="mb-0 mr-2">Due in :</p>
                                                        <p class="Last-responded mr-2 mb-0">2 Days</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ticket-actions col-2">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Manage
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-history fa-fw"></i>Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-check text-success fa-fw"></i>Resolve
                                                            Issue</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fa fa-times text-danger fa-fw"></i>Close
                                                            Issue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('backend.includes.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- Main Js -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}">
    </script>

    <!-- inject:js -->
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
