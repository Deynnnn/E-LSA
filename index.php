<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Log In</title>
</head>
<body class="custom-bg-img">
    
    <div class="container">
        <div class="row ">
            <div class="text-center mt-5">
                <a href="index.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
            </div>
            <div class="custom-container text-center rounded shadow overflow-hidden col-lg-4 col-md-6 col-sm-12 mx-auto">
                <form method="POST" id="login-form">
                    <div class="p-4">
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
                                <label class="form-check-label text-light" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <a href="forgot.php" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <button class="btn col-12 custom-bg shadow-none text-dark fw-bold" name='login'type='submit'>LOGIN</button>
                        <hr class='text-light'>
                        <div class="mt-3">
                            <p class="fw-medium text-light">OR</p>
                            <a href="register.php" class="text-decoration-none fw-medium"><p class="">Register</p></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="loader"></div>
    <script>
        let login_form = document.getElementById('login-form');

        login_form.addEventListener('submit', (e) => {
            e.preventDefault();

            let data = new FormData();

            data.append('email', login_form.elements['email'].value);
            data.append('password', login_form.elements['password'].value);
            data.append('login', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/login_register.php", true);

            xhr.onload = function () {
                if(this.responseText == 'inv_email_mob'){
                    alert('error','Email not registered!');
                    login_form.reset();
                }else if(this.responseText =='not_verfied'){
                    alert('error','Email not verified, check your mail to verify!');
                }else if(this.responseText == 'invalid_pass'){
                    alert('error','Incorrect Password, try again!');
                }else{
                    window.location = 'login.php'
                }
            }
            xhr.send(data);
        });
    </script>
    <?php require("includes/footer.php"); ?>
    <script src="js/loader.js"></script>
</body>
</html>