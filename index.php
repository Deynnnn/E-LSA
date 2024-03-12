<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Log In</title>
    <style>
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
        .lsa-logo{
            width: 250px;
        }
        .custom-bg{
            background-color:  rgb(128,242,58);
            border: 1px solid  rgb(128,242,58);
        }
        .custom-bg:hover{
            background-color:  rgb(128,242,58,.85);
            border: 1px solid  rgb(128,242,58);
        }
        .custom-alert{
            position: fixed;
            top: 25px;
            right: 25px;
        }
        .custom-bg-img{
            background-image: url('images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            color: #fff;
            text-align: center;
        }
        .custom-container::before{
            content: '';
            background-color: #ddd;
            opacity: 1.0;
        }
    </style>
</head>
<body class="custom-bg-img">
    
    <div class="container">
        <div class="row ">
            <div class="text-center mt-5">
                <a href="index.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
            </div>
            <div class="custom-container text-center rounded shadow overflow-hidden col-lg-4 col-md-6 col-sm-12 mx-auto">
                <form method="POST">
                    <div class="p-4 text-dark">
                        <div class="mb-3 form-floating col-12 ps-0"> 
                            <input type="email" name="email" class="form-control shadow-none" id="nameInput" placeholder="name@example.com" required>
                            <label for="nameInput">Email</label>
                        </div>
                        <div class="form-floating col-12 ps-0"> 
                            <input type="password" name="password" class="form-control shadow-none" id="passwordInput" placeholder="password" required>
                            <label for="passwordInput">Password</label>
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input shadow-none" type="checkbox" value="remember-me" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <a href="forgot.php" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <button class="btn col-12 custom-bg shadow-none text-dark fw-bold" name='login'type='submit'>LOGIN</button>
                        <div class="mt-3">
                            <p class="fw-medium">OR</p>
                            <a href="register.php" class="text-decoration-none fw-medium"><p class="">Register</p></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>