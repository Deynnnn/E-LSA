<?php 
    require('admin/includes/dbConfig.php');
    require('admin/includes/essentials.php');
    userLogin();

    $sql = "SELECT * FROM file_upload_download";
    $result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Log In</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .modal-content img {
            width: 100%;
            height: auto;
        }
        /* Close button */
        .close {
            color: #fff;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
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
                    <div class="row">
                        <div class="col-6">
                            <img src="images/briefer1.png" alt="" class="img-fluid w-100" id="thumbnail1">
                        </div>
                        <div class="col-6">
                            <img src="images/briefer2.png" alt="" class="img-fluid w-100" id="thumbnail2" >
                        </div>
                    </div>
                    <h1 class="fw-bold">LSA I</h1>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <?php
                                $file_path = "courses/" . 'Agri-Processing-LSA-Profile-Form.docx';
                            ?>
                            <a href="<?php echo $file_path; ?>" class="btn custom-bg fw-medium" download><i class="bi bi-file-arrow-down"></i>Agri-Processing-LSA-Profile-Form</a></td>
                        </div>
                        <div class="col-6 mb-4">
                            <?php
                                $file_path = "courses/" . 'Farming-LSA-Profile-Form.docx';
                            ?>
                            <a href="<?php echo $file_path; ?>" class="btn custom-bg fw-medium" download><i class="bi bi-file-arrow-down"></i>Farming-LSA-Profile-Form</a></td>
                        </div>
                    </div>

                    <form id="upload-form" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="file" class="form-label">Select File</label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload File</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="briefer1.png" alt="Larger Image">
    </div>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal
    var img1 = document.getElementById("thumbnail1");
    var img2 = document.getElementById("thumbnail2");
    var modalImg = document.querySelector(".modal-content img");
    img1.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src.replace('briefer1_', ''); // Replace 'thumbnail_' with the prefix of your thumbnail images
    }
    img2.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src.replace('briefer2_', ''); // Replace 'thumbnail_' with the prefix of your thumbnail images
    }

    // Get the close button
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    </script>
    <div class="loader"></div>
    <script src="./js/loader.js"></script>
    <script src="./js/upload.js"></script>
    <?php require("./includes/footer.php"); ?>
</body>
</html>