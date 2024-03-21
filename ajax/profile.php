<?php
    require ('../admin/includes/dbConfig.php');
    require ('../admin/includes/essentials.php');

    date_default_timezone_set("Asia/Manila");


    if(isset($_POST['info_form'])){
        $frm_data = filteration($_POST);
        session_start();

        $u_exist = select("SELECT * FROM `users` WHERE `id`!=? LIMIT 1", [$_SESSION['uId']], "s");

        $query = "UPDATE `users` SET `first_name`=?, `last_name`=?, `address`=?, `dob`=? WHERE `id`=?";
        $values = [$frm_data['first_name'],$frm_data['last_name'],$frm_data['address'],$frm_data['dob'],$_SESSION['uId']];
        
        if(update($query,$values,'sssss')){
            $_SESSION['uFName'] = $frm_data['first_name'];
            $_SESSION['uLName'] = $frm_data['last_name'];
            echo 1;
        }else{
            echo 0;
        }
    }

    if(isset($_POST['pass_form'])){
        $frm_data = filteration($_POST);
        session_start();

        if($frm_data['new_pass']!=$frm_data['confirm_pass']){
            echo 'mismatch';
            exit;
        }

        $enc_pass = password_hash($frm_data['new_pass'], PASSWORD_BCRYPT);

        $query = "UPDATE `users` SET `password`=? WHERE `id`=? LIMIT 1";

        $values = [$enc_pass, $_SESSION['uId']];

        if(update($query,$values,'ss')){
            echo 1;
        }else{
            echo 0;
        }
    }

?>