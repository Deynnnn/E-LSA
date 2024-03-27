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
    <title>ADMIN PANEL - USERS</title>
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
            top: 75px;
            right: 25px;
        }
    </style>
</head>
<body class="bg-white">
    <?php 
        require('includes/header.php');
        $current_users = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(id) as `total`, COUNT(CASE WHEN `status` = 1 THEN 1 END) AS `active`,COUNT(CASE WHEN `status` = 0 THEN 1 END) AS `inactive`,COUNT(CASE WHEN `is_verified` = 0 THEN 1 END) AS `unverified` FROM `users`"));
    ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4 fw-bold">USERS</h3>
                <div class="row mb-3">

                    <div class="col-md-3 mb-4">
                        <div class="card text-center text-info p-3">
                            <h6>TOTAL USERS</h6>
                            <h1 class="mt-2 mb-0">
                            <?php
                                    echo $current_users['total'];
                                ?>
                            </h1>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card text-center text-success p-3">
                            <h6>ACTIVE USERS</h6>
                            <h1 class="mt-2 mb-0">
                                <?php
                                    echo $current_users['active'];
                                ?>
                            </h1>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card text-center text-warning p-3">
                            <h6>INACTIVE USERS</h6>
                            <h1 class="mt-2 mb-0">
                                <?php
                                    echo $current_users['inactive'];
                                ?>
                            </h1>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card text-center text-danger p-3">
                            <h6>UNVERIFIED USERS</h6>
                            <h1 class="mt-2 mb-0">
                            <?php
                                echo $current_users['unverified'];
                            ?>
                            </h1>
                        </div>
                    </div>

                </div>

                <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                
                    <div class="text-end mb-4">
                        <input type="text" oninput="search_user(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Type to SEARCH">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover text-center" style="min-width: 1300px;">
                            <thead>
                                <tr class="text-white" style="background-color: rgb(100,20,22);">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Location</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Verified</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="users-data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php require('includes/scripts.php');?>
    <script src="scripts/users.js"></script>
</body>
</html>