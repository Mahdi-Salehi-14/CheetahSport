<!doctype html>
<html lang = "fa">
    <head>
        <title>جست و جو</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>جست و جو</h1>
                <h2>نتیجه جست و جو '<?php echo "$search"; ?>'</h2>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
                        foreach($productlistsearch as $product)
                            {
                                echo "
                                    <div class='col'>
                                        <div class = 'card h-100'>
                                            <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
                                                <img src='{$product['productimg']}' class='img-fluid'/>
                                                <a href='ViewProduct.php?id={$product['id']}'>
                                                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                                </a>
                                            </div>
                                            <div class='card-body'>
                                                <h5 class='card-title'><a href = 'ViewProduct.php?id={$product['id']}'>{$product['productname']}</a></h5>
                                                <p class='card-text'>قیمت :{$product['productprice']}</p>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                    ?>   
                </div>
                <?php
                    if(!isset($product['id'])){
                        echo "
                        <hr class='hr hr-blurry' style='margin-top: 30px'/>
                        <h4 class='card-text'>محصول مورد نظر یافت نشد</h4>
                        ";
                    }
                ?>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
        <script src="LikeBookmark.js"></script>
    </body>
</html>
