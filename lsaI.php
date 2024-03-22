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
    <div class="loader"></div>
    <script src="./js/loader.js"></script>
    <script src="./js/upload.js"></script>
    <?php require("./includes/footer.php"); ?>
</body>
</html>