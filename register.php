<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Register</title>
</head>
<body class="custom-bg-img">
    
    <div class="container">
        <div class="row ">
            <div class="text-center mt-5">
                <a href="index.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
            </div>
            <div class="custom-container text-center rounded shadow overflow-hidden col-lg-6 col-md-8 col-sm-12 mx-auto">
                <h2 class="text-lignt mt-3">Account Registration</h2>
                <form method="POST" id="register-form">
                    <div class="p-4 text-dark row">
                        <div class="mb-3 form-floating col-6 ps-0"> 
                            <input type="text" name="first_name" class="form-control shadow-none" id="firstNameInput" placeholder="name@example.com" required>
                            <label for="firstNameInput">First Name</label>
                        </div>
                        <div class="mb-3 form-floating col-6 ps-0"> 
                            <input type="text" name="last_name" class="form-control shadow-none" id="lastNameInput" placeholder="name@example.com" required>
                            <label for="lastNameInput">Last Name</label>
                        </div>
                        <div class="form-floating col-6 ps-0 mb-3"> 
                            <input type="date" name="dob" class="form-control shadow-none" id="dobInput" placeholder="password" required>
                            <label for="dobInput">Date of Birth</label>
                        </div>
                        <div class="form-floating col-6 ps-0 mb-3"> 
                            <input type="password" name="password" class="form-control shadow-none" id="passwordInput" placeholder="password" required>
                            <label for="passwordInput">Password</label>
                        </div>
                        <div class="form-floating col-12 ps-0 mb-3"> 
                            <textarea type="text" name="address" class="form-control shadow-none" id="addressInput" placeholder="address" required></textarea>
                            <label for="addressInput">Address</label>
                        </div>
                        <div class="mb-4 form-floating col-12 ps-0"> 
                            <input type="email" name="email" class="form-control shadow-none" id="emailInput" placeholder="name@example.com" required>
                            <label for="emailInput">Email</label>
                        </div>
                        <div class="text-center ps-0">
                            <button class="btn col-12 custom-bg shadow-none  fw-bold text-center" name='register'type='submit'>REGISTER</button>
                        </div>
                        <div class="mt-3">
                            <p class="text-light fw-medium">Already have an account? Click <a href="index.php" class="text-decoration-none fw-medium">here to login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="loader"></div>
    <script src="js/loader.js"></script>
    <?php require("includes/footer.php"); ?>
</body>
</html>