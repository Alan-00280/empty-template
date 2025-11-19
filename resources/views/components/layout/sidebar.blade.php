<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <!-- Profile -->
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('react-public/images/faces/face10.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <!-- Basic UI -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#basic-ui">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="basic-ui">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/basic-ui/buttons">Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="/basic-ui/dropdowns">Dropdowns</a></li>
                    <li class="nav-item"><a class="nav-link" href="/basic-ui/typography">Typography</a></li>
                </ul>
            </div>
        </li>

        <!-- Form Elements -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements">
                <span class="menu-title">Form Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/form-elements/basic-elements">Basic Elements</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
