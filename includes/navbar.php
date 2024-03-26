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
                <a class="nav-link hov" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link hov" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php
                    if(isset($_SESSION['login']) && $_SESSION['login']==true){
                        echo<<<data
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-dark shadow_none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <i class="bi bi-person-badge-fill fs-5"></i>
                                    $_SESSION[uFName] $_SESSION[uLName]
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        data;
                    }else{
                        echo<<<data
                            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                                Login
                            </button>
                            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                                Register
                            </button>
                        data;
                    }
                ?>
            </div>
        </div>
    </div>
</nav>
<!-- Data Privacy Modal -->
<div class="modal fade" id="dataprivacyModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-shield-lock-fill"></i> Terms and Conditions</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="" style="text-align: justify;">In compliance with the <b>Data Privacy Act (DPA) of 2012</b>, and its <b>Implementing Rules and Regulations (IRR)</b> effective since September 8, 2016, I allow The Learning Site for Agriculture to use the data I provided in this form for the processing of my files in the Institute and other reports needed by the Institute in relation to its processes. Additionally, I give my consent and allow Agriculture Training Institute to share my information to the other stakeholders.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Close</button>
        </div>
        </div>
    </div>
</div>