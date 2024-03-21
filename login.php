<?php 
    require('admin/includes/dbConfig.php');
    require('admin/includes/essentials.php');
    userLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("includes/links.php"); ?>
    <title>E-LSA - Log In</title>
</head>
<body>
    <div class="">
        <?php 
            require("includes/navbar.php");
        ?>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-3 mt-2">
                <a href="login.php"><img src="images/logo.png" alt="" class="lsa-logo"></a>
                <div class="mt-3">
                    <h3 class="fw-bold">COURSES</h3>
                    <div class="row">
                        <div class="mt-3 text-center col-6">
                            <a href="lsaI.php" class="text-decoration-none text-dark">
                                <h2><i class="fa-solid fa-book course"></i></h2>
                                <p class="fw-bold fs-5">LSA I</p>
                            </a>
                        </div>
                        <div class="mt-3 text-center col-6">
                            <h2><i class="fa-solid fa-book course"></i></h2>
                            <p class="fw-bold fs-5">LSA II</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-2">
                <div class="shadow-sm p-4">
                    <h1 class="fw-bold">OVERVIEW</h1>
                    <p class="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis exercitationem atque dolore ea mollitia accusantium expedita ad earum. Necessitatibus aliquam laudantium quia, suscipit dolorem dolore, in consectetur eum placeat rem maiores ipsa ratione quasi nobis odit aperiam quo tempore maxime. Aperiam voluptatibus quo dicta reprehenderit, libero saepe rerum nemo, laboriosam numquam, beatae ea officia. Voluptatum dolor minima doloribus accusamus aperiam amet iure itaque officiis atque possimus inventore vitae tempora voluptates nobis delectus perspiciatis porro sapiente eum culpa et praesentium ab voluptas, aliquid iste. Eos neque accusantium deleniti fugit repellat qui voluptas quod aut voluptates. Itaque, quas nostrum eligendi laudantium atque omnis adipisci architecto perspiciatis nam nisi quod dolorum aut tempora? Porro repudiandae harum ullam est tempore cupiditate facilis, quas debitis iste saepe perspiciatis unde et commodi. Possimus nisi, expedita repudiandae repellendus, dolorum doloribus necessitatibus voluptatum itaque soluta quibusdam velit mollitia perspiciatis ab voluptatem assumenda praesentium iste non, consequuntur beatae nostrum illo! Harum autem nisi exercitationem hic nulla. Enim, dignissimos accusamus. Dolore, officia. Fugiat fugit ullam voluptates eum repellendus! Deserunt qui eius, laudantium excepturi ipsa voluptatibus in iusto, autem accusamus dicta adipisci? Ipsam quasi ipsum vero magni alias nostrum laudantium cumque, at quos soluta, officiis quisquam aspernatur repellat laborum labore eaque, impedit recusandae eum? Vitae, odit! Rerum accusamus omnis sunt nulla maiores, voluptatibus iusto magnam quod soluta, repellendus, saepe debitis a consequuntur? Quos, hic expedita vero magnam error et aut provident odio dolore similique excepturi maxime animi distinctio numquam nostrum deleniti quibusdam doloribus necessitatibus quidem possimus explicabo deserunt voluptatum saepe quia. Nam culpa delectus suscipit.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="loader"></div>
    <script src="./js/loader.js"></script>
    <?php require("./includes/footer.php"); ?>
</body>
</html>