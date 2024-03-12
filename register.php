<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Register</title>
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
            <div class="custom-container text-center rounded shadow overflow-hidden col-lg-6 col-md-8 col-sm-12 mx-auto">
                <h2 class="text-lignt mt-3">Account Regitration</h2>
                <form method="POST">
                    <div class="p-4 text-dark row">
                        <div class="mb-3 form-floating col-6 ps-0"> 
                            <input type="text" name="name" class="form-control shadow-none" id="nameInput" placeholder="name@example.com" required>
                            <label for="nameInput">First Name</label>
                        </div>
                        <div class="mb-3 form-floating col-6 ps-0"> 
                            <input type="text" name="name" class="form-control shadow-none" id="nameInput" placeholder="name@example.com" required>
                            <label for="nameInput">Last Name</label>
                        </div>
                        <div class="form-floating col-6 ps-0 mb-3"> 
                            <input type="text" name="password" class="form-control shadow-none" id="passwordInput" placeholder="password" required>
                            <label for="passwordInput">Address</label>
                        </div>
                        <div class="form-floating col-6 ps-0 mb-3"> 
                            <input type="date" name="password" class="form-control shadow-none" id="passwordInput" placeholder="password" required>
                            <label for="passwordInput">Date of Birth</label>
                        </div>
                        <div class="mb-4 form-floating col-12 ps-0"> 
                            <input type="email" name="email" class="form-control shadow-none" id="nameInput" placeholder="name@example.com" required>
                            <label for="nameInput">Email</label>
                        </div>
                        <div class="text-center ps-0">
                            <button class="btn col-12 custom-bg shadow-none  fw-bold text-center" name='register'type='submit'><a href="confirm_registration.php" class="text-decoration-none text-dark">REGISTER</a></button>
                        </div>
                        <div class="mt-3">
                            <p class="text-light fw-medium">Already have an account? Click <a href="index.php" class="text-decoration-none fw-medium">here to login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>