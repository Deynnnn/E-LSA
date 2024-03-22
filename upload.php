<?php
require ('admin/includes/dbConfig.php');
require ('admin/includes/essentials.php');

date_default_timezone_set("Asia/Manila");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        session_start();
        $target_dir = "user_uploads/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
        $allowed_types = array("docx","jpg", "jpeg", "png", "gif", "pdf");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only DOCX, JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Database connection
                

                // Insert the file information into the database
                $sql = "INSERT INTO file_upload_download (filename, filesize, filetype, upload_by) VALUES ('$filename', $filesize, '$filetype', $_SESSION[uId])";

                if ($con->query($sql) === TRUE) {
                    echo "upload_success";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $con->error;
                }

                $con->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

