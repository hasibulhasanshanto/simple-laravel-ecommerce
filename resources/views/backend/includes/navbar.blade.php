<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#"> <strong>Lara Ecom</strong>
            {{-- <img src="{{ asset('/backend/images')}}/logo.svg"
            alt="logo" /> --}}
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">

        </ul>
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="#">
                    <h5>Admin | Hasibul Hasan</h5>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="#">
                    <img class="img-xs rounded-circle" src="{{ asset('/backend/images')}}/faces/face4.jpg" alt="">
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-cogs"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <div class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left"><i class="fas fa-user"></i>Profile
                        </p>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left"><i class="fas fa-sign-out-alt"></i>Logout
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
