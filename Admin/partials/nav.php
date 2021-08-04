<body>
    <div class="container-scroller">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" />

        </a>
    </div>
    <ul class="nav">

        <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="posts">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="posts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="post_add.php">Add Post</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="post_view.php">View Post</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
                <span class="menu-icon">
                    <i class=" mdi mdi-account-multiple-plus"></i>
                </span>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="post_add.php">Add User</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="post_view.php">View User</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
                <span class="menu-icon">
                    <i class=" mdi mdi-briefcase"></i>
                </span>
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="services">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="service_add.php">Add Service</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="service_view.php">View Services</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false"
                aria-controls="categories">
                <span class="menu-icon">
                    <i class=" mdi mdi-briefcase"></i>
                </span>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="category_add.php">Add Categories</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="category_view.php">View Categories</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="company.php">
                <span class="menu-icon">
                    <i class=" mdi mdi-settings "></i>
                </span>
                <span class="menu-title">Company</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="feedback.php">
                <span class="menu-icon">
                    <i class=" mdi mdi-comment-multiple-outline "></i>
                </span>
                <span class="menu-title">Feedback</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="advert.php">
                <span class="menu-icon">
                    <i class=" mdi mdi-comment-multiple-outline "></i>
                </span>
                <span class="menu-title">Ads</span>
            </a>
        </li>

    </ul>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        <span class="count bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                <p class="text-muted mb-0"> 1 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                <p class="text-muted mb-0"> 15 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                <p class="text-muted mb-0"> 18 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">4 new messages</p>
                    </div>
                </li>
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Event today</p>
                                <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event
                                    today </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Settings</p>
                                <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Launch Admin</p>
                                <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">See all notifications</p>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                            <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Profile</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Setting</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-logout text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Log out</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>