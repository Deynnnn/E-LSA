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
    <title>E-LSA - Courses</title>
</head>
<body>

    <div class="">
        <?php 
            require("includes/navbar.php");

            if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
                redirect('index.php');
            }
        ?>
    </div>
    
    <div class="container">
        <div class="row ">
            <div class="text-center mt-2">
                <h1>Coming soon🚀</h1>
                <a href="#"><img src="images/cs.png" alt="" class="" width='400'></a>
            </div>
    </div>


    <?php require('includes/footer.php');?>
</body>
</html>