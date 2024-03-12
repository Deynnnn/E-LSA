<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Confirm Regitration</title>
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

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        input[type="number"] {
        -moz-appearance: textfield; /* Firefox appearance */
        appearance: textfield; /* Standard appearance */
        width: 50px; /* Set width as needed */
        padding: 5px; /* Set padding as needed */
        }
    </style>
</head>
<body class="custom-bg-img">
    
    <div class="container">
        <div class="row ">
            <div class="text-center mt-5">
                <a href="index.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
            </div>
            <div class="custom-container text-center rounded shadow overflow-hidden col-lg-4 col-md-8 col-sm-12 mx-auto">
                <h2 class="text-lignt mt-3">Email Verificaiton</h2>
                <form method="POST">
                    <div class="p-4 text-dark row text-center">
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="name" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="name" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="name" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="name" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="name" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="name" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="text-center ps-0">
                            <button class="btn col-12 custom-bg shadow-none text-dark fw-bold text-center" name='register'type='submit'>CONFIRM</button>
                        </div>
                        <div class="mt-3">
                            <p class="text-light fw-medium">Check your email to verify your code sent by ATI.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>