<nav  id="nav-bar" class="navbar navbar-expand-lg custom-bg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="login.php"> <img src="images/logo.png" width="50" height="50" alt=""> E-LSA</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-medium">
                <li class="nav-item">
                <a class="nav-link hov" aria-current="page" href="login.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link hov" href="courses.php">Courses</a>
                </li>
                <li class="nav-item">
                <a class="nav-link hov" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link hov" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php
                    // if(isset($_SESSION['login']) && $_SESSION['login']==true){
                        echo<<<data
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-dark shadow_none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <i class="bi bi-person-badge-fill fs-5"></i>
                                    User Name
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                                </ul>
                            </div>
                        data;
                    // }
                ?>
            </div>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>