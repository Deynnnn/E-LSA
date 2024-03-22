<?php

    require('../includes/essentials.php');
    require('../includes/dbConfig.php'); 

    if(isset($_POST['pass_form'])){
        $frm_data = filteration($_POST);
        session_start();

        if($frm_data['new_pass']!=$frm_data['confirm_pass']){
            echo 'mismatch';
            exit;
        }

        $enc_pass = password_hash($frm_data['new_pass'], PASSWORD_BCRYPT);

        $query = "UPDATE `admin` SET `password`=? WHERE `id`=? LIMIT 1";

        $values = [$enc_pass, $_SESSION['adminId']];

        if(update($query,$values,'ss')){
            echo 1;
        }else{
            echo 0;
        }
    }

?>