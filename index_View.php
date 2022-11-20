<!doctype html>
<html lang = "fa">
    <head>
        <title>خانه | Home</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>فروشگاه چیتا اسپورت</h1>
                <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                    <div class="carousel-indicators">
                        <button
                        type="button"
                        data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                        ></button>
                        <button
                        type="button"
                        data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide-to="1"
                        aria-label="Slide 2"
                        ></button>
                        <button
                        type="button"
                        data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide-to="2"
                        aria-label="Slide 3"
                        ></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="Images\banner1.jpg" class="d-block w-100" alt="Wild Landscape"/>
                        </div>
                        <div class="carousel-item">
                        <img src="Images\banner2.jpg" class="d-block w-100" alt="Camera"/>
                        </div>
                        <div class="carousel-item">
                        <img src="Images\banner3.jpg" class="d-block w-100" alt="Exotic Fruits"/>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="prev">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide="next">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <hr class="hr hr-blurry" />
                <h2>ارزان ترین محصولات</h2>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
                        foreach($productlistcheapest as $product)
                            {
                                include 'CardLike.php';
                                include 'CardBookmark.php';
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
                                            <div class='card-footer'>
                                                <div class='cardbottomlink' style='display: grid; grid-template-columns: auto auto;'>
                                                    <a href='LikeProduct.php?id={$product['id']}' class='card-iconlink'>
                                                        <i class='{$lfa} fa-heart'></i>
                                                    </a>
                                                    <a href='BookmarkProduct.php?id={$product['id']}' class='card-iconlink'>
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
                <hr class="hr hr-blurry" />
                <h2>محبوب ترین محصولات</h2>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php
                        foreach($productlistpopular as $product)
                            {
                                include 'CardLike.php';
                                include 'CardBookmark.php';
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
                                            <div class='card-footer'>
                                                <div class='cardbottomlink' style='display: grid; grid-template-columns: auto auto;'>
                                                    <a href='LikeProduct.php?id={$product['id']}' class='card-iconlink'>
                                                        <i class='{$lfa} fa-heart'></i>
                                                    </a>
                                                    <a href='BookmarkProduct.php?id={$product['id']}' class='card-iconlink'>
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