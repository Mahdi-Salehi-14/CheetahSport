<!doctype html>
<html lang="fa">
    <head>
        <title>لایک ها</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>محصولاتی که لایک کردید</h1>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
                        foreach($likelist as $like_product)
                            {
                                include 'ViewProductInLike.php';
                                include 'CardLike.php';
                                include 'CardBookmark.php';
                                echo "
                                    <div class='col'>
                                        <div class = 'card h-100'>
                                            <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
                                                <img src='{$img}' class='img-fluid'/>
                                                <a href='ViewProduct.php?id={$id}'>
                                                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                                </a>
                                            </div>
                                            <div class='card-body'>
                                                <h5 class='card-title'><a href = 'ViewProduct.php?id={$id}'>{$name}</a></h5>
                                                <p class='card-text'>قیمت :{$productprice}</p>
                                            </div>
                                            <div class='card-footer'>
                                                <div class='cardbottomlink' style='display: grid; grid-template-columns: auto auto;'>
                                                    <a href='LikeProduct.php?id={$id}' class='card-iconlink'>
                                                        <i class='{$lfa} fa-heart'></i>
                                                    </a>
                                                    <a href='BookmarkProduct.php?id={$id}' class='card-iconlink'>
                                                        <i class='{$bfa} fa-bookmark'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                    ?>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
        <script src="LikeBookmark.js"></script>
    </body>
</html>