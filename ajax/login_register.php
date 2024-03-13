<?php
    require("../admin/includes/dbConfig.php");
    require("../admin/includes/essentials.php");
    require ("../includes/Mail/phpmailer/PHPMailerAutoload.php");

    date_default_timezone_set("Asia/Manila");


    function send_mail($email, $token, $type, $code){
        if($type == 'otp_confirmation'){
            $page = 'confirm_registration.php';
            $subject = 'LSA - EMAIL CONFIRMATION CODE';
            $content = 'Verify your email';
        }

        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host='smtp_provider';
        $mail->Port=smtp_port;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        $mail->Username='your_smtp_email';
        $mail->Password='your_smtp_password';

        $mail->setFrom('your_smtp_email', $subject);
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject= $subject;
        $mail->Body="<div style=' padding: 10px; border: 2px solid black; border-radius: 20px;'>
                        <div style='background-color: rgb(128,242,58); color: black; border-radius: 25px;'>
                            <h1 style='text-align: center;'>$content:</h1>
                        </div>
                        <p style='text-align: center;'>Your verification code is: <b style='font-size: 30px'>$code</b></p>
                        <center>
                            <a href='" . SITE_URL . "$page?$type&email=$email&token=$token'>Click Me</a>
                            <br><br>
                            <p>With regrads,</p>
                            <b>Learning Site for Agriculture | Agriculture Training Institute | Barcenaga Naujan Oriental Mindoro</b>
                        </center>
                    </div>";
                        

        if ($mail->send()) {
            return 1;
        } else {
            return 0;
        }
    }

    if (isset($_POST['register'])){
        $data = filteration($_POST);


        // User checker {existing/not}
        $u_exist = select("SELECT * FROM `users` WHERE `email`=? LIMIT 1", [$data['email']], 's');

        if (mysqli_num_rows($u_exist) != 0) {
            $u_exist_fetch = mysqli_fetch_assoc($u_exist);
            echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
            exit;
        }

        // Send confirmation link to user's email
        $token = bin2hex(random_bytes(16));
        $otp_code = substr(number_format(time() * rand(), 0 , '', ''), 0, 6);


        if (!send_mail($data['email'], $token, "otp_confirmation", $otp_code)) {
            echo 'mail_failed';
            exit;
        }

        $enc_pass = password_hash($data['password'], PASSWORD_BCRYPT);

        $query = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `address`, `dob`, `password`, `token`, `otp`) VALUES (?,?,?,?,?,?,?,?)";
        $values = [$data['first_name'], $data['last_name'], $data['email'], $data['address'], $data['dob'], $enc_pass, $token, $otp_code];

        if (insert($query, $values, 'ssssssss')) {
            echo 1;
        } else {
            echo 'ins_failed';
        }
    }

    if (isset($_POST['verify_email'])){
        $frm_data = filteration($_POST);

        
        $otp_code = $frm_data['num1'].$frm_data['num2'].$frm_data['num3'].$frm_data['num4'].$frm_data['num5'].$frm_data['num6'];
        
        $u_exist = select("SELECT * FROM `users` WHERE `otp`=? LIMIT 1", [$otp_code], 's');

        if(mysqli_num_rows($u_exist) == 0){
            echo'inv_otp';
            exit;
        }else{
            $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['is_verified'] == 1){
                echo 'already_verified';
                exit;
            }
        }

        $query = 'UPDATE `users` SET `is_verified` = ?, `email_verified_at`= NOW() WHERE otp = ? AND is_verified = 0';
        $values = [1,$otp_code];
        $res = update($query, $values, 'is');

        if ($res) {
            echo 1;
        }else {
            echo 'verification_failed';
        }
    }

    if (isset($_POST['login'])){
        $data = filteration($_POST);

        // User checker {existing/not}
        $u_exist = select("SELECT * FROM `users` WHERE `email`=? LIMIT 1", [$data['email']], 's');

        if(mysqli_num_rows($u_exist) == 0) {
            echo 'inv_email_mob';
            exit;
        }else{
            $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['is_verified']==0){
                echo 'not_verfied';
            }else{
                if(!password_verify($data['password'],$u_fetch['password'])){
                    echo 'invalid_pass';
                }else{
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['uId'] = $u_fetch['id'];
                        $_SESSION['uFName'] = $u_fetch['first_name'];
                        $_SESSION['uLName'] = $u_fetch['last_name'];
                        echo 1;
                    }
                }
            }
        }


?>
