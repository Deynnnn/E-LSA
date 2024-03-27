<?php
    require('includes/essentials.php');
    require('includes/dbConfig.php');

    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL - LSA I</title>
    <?php require('includes/links.php');?>
    <style>
        #dashboard-menu{
            position: fixed;
            height: 100%;
            z-index: 11;
        }

        @media screen and (max-width: 991px){
            #dashboard-menu{
                height: auto;
                width: 100%;
            }
            #main-content{
                margin-top: 60px;
            }
        }
        .custom-bg{
            background-color:  rgb(128,242,58);
            border: 1px solid  rgb(128,242,58);
        }
        .custom-bg:hover{
            background-color:  rgb(128,242,58,.85);
            border: 1px solid  rgb(128,242,58)
        }
        .custom-alert{
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>
</head>
<body class="bg-white">
    <?php 
        require('includes/header.php');
    
    ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <div class="text-center mt-2">
                    <h1>Coming soon🚀</h1>
                    <a href="#"><img src="images/cs.png" alt="" class="" width='400'></a>
                </div>
            </div>
        </div>
    </div>

    <?php require('includes/scripts.php');?>
    <script src="scripts/dashboard.js"></script>
</body>
</html>