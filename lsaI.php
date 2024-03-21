<?php 
    require('admin/includes/dbConfig.php');
    require('admin/includes/essentials.php');
    userLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Log In</title>
</head>
<body>
    <div class="">
        <?php 
            require("includes/navbar.php");
        ?>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-3 mt-2">
                <a href="login.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
                <div class="mt-3">
                    <h3 class="fw-bold">COURSES</h3>
                    <div class="row">
                        <div class="mt-3 text-center col-6">
                            <h2><i class="fa-solid fa-book course"></i></h2>
                            <p class="fw-bold fs-5">LSA I</p>
                        </div>
                        <div class="mt-3 text-center col-6">
                            <h2><i class="fa-solid fa-book course"></i></h2>
                            <p class="fw-bold fs-5">LSA II</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-2">
                <div class="shadow-sm p-4">
                    <h1 class="fw-bold">LSA I</h1>
                    
                </div>
            </div>

        </div>
    </div>
    <div class="loader"></div>
    <script src="./js/loader.js"></script>
    <?php require("./includes/footer.php"); ?>
</body>
</html>