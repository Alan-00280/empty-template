<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

    <!-- BRAND -->
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/">
            <img src="{{ asset('react-public/images/logo.svg') }}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="/">
            <img src="{{ asset('react-public/images/logo-mini.svg') }}" alt="logo" />
        </a>
        {{-- <Link className="navbar-brand brand-logo" to="/"><img src={require('../../assets/images/logo.svg')} alt="logo" /></Link>
          <Link className="navbar-brand brand-logo-mini" to="/"><img src={require('../../assets/images/logo-mini.svg')} alt="logo" /></Link> --}}
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-stretch">

        <!-- Sidebar toggle -->
        <button class="navbar-toggler align-self-center" type="button"
            onclick="document.body.classList.toggle('sidebar-icon-only')">
            <span class="mdi mdi-menu"></span>
        </button>

        <!-- Search -->
        <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0">
                        <i class="mdi mdi-magnify"></i>
                    </span>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                </div>
            </form>
        </div>

        <!-- RIGHT NAV -->
        <ul class="navbar-nav navbar-nav-right">

            <!-- PROFILE DROPDOWN -->
            <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <div class="nav-profile-img">
                        <img src="{{ asset('react-public/images/faces/face10.jpg') }}" alt="user">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">David Greymaax</p>
                    </div>
                </a>

                <ul class="dropdown-menu navbar-dropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i>
                            Activity Log
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary"></i>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </li>

            <!-- MESSAGES DROPDOWN -->
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count-symbol bg-warning"></span>
                </a>

                <ul class="dropdown-menu navbar-dropdown preview-list">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <img src="face4.jpg" alt="user" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex flex-column">
                                <h6 class="preview-subject ellipsis mb-1">
                                    Mark sent you a message
                                </h6>
                                <p class="text-gray mb-0">1 minute ago</p>
                            </div>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <img src="face2.jpg" alt="user" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex flex-column">
                                <h6 class="preview-subject ellipsis mb-1">
                                    Cregh sent you a message
                                </h6>
                                <p class="text-gray mb-0">15 minutes ago</p>
                            </div>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <img src="face3.jpg" alt="user" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex flex-column">
                                <h6 class="preview-subject ellipsis mb-1">
                                    Profile picture updated
                                </h6>
                                <p class="text-gray mb-0">18 minutes ago</p>
                            </div>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </ul>
            </li>

            <!-- NOTIFICATIONS DROPDOWN -->
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                </a>

                <ul class="dropdown-menu navbar-dropdown preview-list">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex flex-column">
                                <h6 class="preview-subject mb-1">Event Today</h6>
                                <p class="text-gray mb-0">Reminder: you have an event</p>
                            </div>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex flex-column">
                                <h6 class="preview-subject mb-1">Settings</h6>
                                <p class="text-gray mb-0">Update dashboard</p>
                            </div>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item preview-item" href="#">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex flex-column">
                                <h6 class="preview-subject mb-1">Launch Admin</h6>
                                <p class="text-gray mb-0">New admin wow!</p>
                            </div>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </ul>
            </li>

            <!-- LOGOUT -->
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>

            <!-- SETTINGS BUTTON -->
            <li class="nav-item nav-settings d-none d-lg-block">
                <button class="nav-link border-0" onclick="toggleRightSidebar()">
                    <i class="mdi mdi-format-line-spacing"></i>
                </button>
            </li>
        </ul>

        <!-- MOBILE TOGGLER -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            onclick="toggleOffcanvas()">
            <span class="mdi mdi-menu"></span>
        </button>

    </div>
</nav>
