<?php require("admin/includes/essentials.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Confirm Regitration</title>
</head>
<body class="custom-bg-img">
    
    <div class="container">
        <div class="row ">
            <div class="text-center mt-5">
                <a href="index.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
            </div>
            <div class="custom-container text-center rounded shadow overflow-hidden col-lg-4 col-md-8 col-sm-12 mx-auto">
                <h2 class="text-lignt mt-3">Email Verificaiton</h2>
                <form method="POST" id="confirmation-form">
                    <div class="p-4 text-dark row text-center">
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="num1" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="num2" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="num3" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="num4" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="num5" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="mb-3 col-2 ps-0"> 
                            <input type="number" name="num6" class="form-control shadow-none fs-4 text-center fw-bold" id="nameInput" required>
                        </div>
                        <div class="text-center ps-0">
                            <button class="btn col-12 custom-bg shadow-none text-dark fw-bold text-center" name='register'type='submit'>VERIFY</button>
                        </div>
                        <div class="mt-3">
                            <p class="text-light fw-medium">Check your email to verify your code sent by ATI. <br> <a href="index.php" class="text-decoration-none ">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="loader"></div>
    <?php require("includes/footer.php"); ?>
    <script>

    let confirmation_form = document.getElementById('confirmation-form');

    confirmation_form.addEventListener('submit', (e)=>{
        e.preventDefault();
        let data = new FormData();

        data.append('verify_email', '');
        data.append('num1', confirmation_form.elements['num1'].value);
        data.append('num2', confirmation_form.elements['num2'].value);
        data.append('num3', confirmation_form.elements['num3'].value);
        data.append('num4', confirmation_form.elements['num4'].value);
        data.append('num5', confirmation_form.elements['num5'].value);
        data.append('num6', confirmation_form.elements['num6'].value);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);

        xhr.onload = function()
        {
            if(this.responseText == 'verification_failed'){
                alert('error', "Cannot verify email confirmation, Server Down!");
            }else if(this.responseText == 'inv_otp'){
                alert('error', 'Invalid otp check your email for a valid otp.')
                confirmation_form.reset();
            }else if(this.responseText == 'already_verified'){
                alert('error', 'Your account is already verified! You can login.')
                confirmation_form.reset();
            }
            else{
                alert('success', "Verification Successful, You may log in to your account!");
                confirmation_form.reset();
            }
        }
        xhr.send(data);
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/loader.js"></script>
</body>
</html>