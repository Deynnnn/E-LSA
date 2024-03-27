<div class="container-fluid text-light p-3 d-flex align-items-center justify-content-between sticky-top text-dark" style="background-color: rgb(128,242,150);">
    <h3 class="mb-0 fw-bold">E-LSA - ADMIN DASHBOARD</h3>
    <a href="logout.php" class="btn btn-outline-dark btn-sm">LOG OUT</a>
</div>

<div class="col-lg-2" id="dashboard-menu" style="background-color: rgb(128,242,150);">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-dark fw-medium">ADMIN PANEL</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminPanelDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="adminPanelDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center fw-medium" href="dashboard.php">
                        <span class="material-symbols-outlined">
                            grid_view
                        </span>
                        Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center fw-medium" href="users.php">
                        <span class="material-symbols-outlined">
                            groups
                        </span>
                        User
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <p class="fw-lighter">COURSES</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center fw-medium" href="lsa1.php">
                        <span class="material-symbols-outlined">
                            library_books
                        </span>
                        LSA I
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center fw-medium" href="lsa2.php">
                        <span class="material-symbols-outlined">
                            library_books
                        </span>
                        LSA II
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <p class="fw-lighter">SETTINGS</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="settings.php">
                            <span class="material-symbols-outlined">
                                settings
                            </span>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
