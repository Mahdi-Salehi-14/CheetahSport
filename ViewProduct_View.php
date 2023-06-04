<!doctype html>
<html lang = "fa">
    <head>
        <title>مشاهده محصول</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>مشاهده محصول</h1>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img
                                src = '<?php echo"{$product['productimg']}"; ?>'
                                alt="Trendy Pants and Shoes"
                                class="img-fluid rounded-start"
                            />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo"{$product['producttitle']}"; ?></h3>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">نام : <?php echo"{$product['productname']}"; ?></p>
                                <p class="card-text">دسته : <?php if($product['category'] == 'sportshoes'){echo 'کفش';} else if($product['category'] == 'sportsequipment'){echo 'وسیله ورزشی';} else if($product['category'] == 'womensportswear'){echo 'لباس زنانه';} else{echo 'لباس مردانه';} ?></p>
                                <p class="card-text">برند : <?php if($product['brand'] == 'adidas'){echo 'آدیداس';} else if($product['brand'] == 'nike'){echo 'نایک';} else if($product['brand'] == 'reebok'){echo 'ریبوک';} else{echo 'آندر آرمور';} ?></p>
                                <p class="card-text">قیمت : <?php echo"{$product['productprice']}"; ?></p>
                                <p class="card-text">توضیحات : </p><p><?php echo"{$product['productdescription']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <div class='cardbottomlink' style='display: grid; grid-template-columns: auto auto;'>
                                    <a href='LikeProduct.php?id=<?php echo"{$product['id']}"; ?>' class='card-iconlink'>
                                        <i class='<?php if(isset($productlike['id'])){if($productlike['likestatus'] == 'like'){echo 'fas';} else{echo 'far';}} else{echo 'far';} ?> fa-heart'></i>
                                    </a>
                                    <a href='BookmarkProduct.php?id=<?php echo"{$product['id']}"; ?>' class='card-iconlink'>
                                        <i class='<?php if(isset($bookmarklike['id'])){if($bookmarklike['bookmarkstatus'] == 'bookmark-on'){echo 'fas';} else{echo 'far';}} else{echo 'far';} ?> fa-bookmark'></i>
                                    </a>
                                </div>
                                <hr class="hr hr-blurry" />
                                <div>
                                    <p class="card-text">موجودی : <?php echo"{$product['productquantity']}"; ?></p>
                                    <form action='AddToBasket.php?id=<?php echo"{$product['id']}"; ?>' method="post" class="col-md-3">
                                        <div class="form-outline mb-4">
                                            <input type="number" id="productnumber" class="form-control" name="productnumber" value="1" />
                                            <label class="form-label" for="productnumber">تعداد</label>
                                        </div>
                                        <input type='hidden' id='basketstatus' name='basketstatus' value='notcompleted'>
                                        <input type='hidden' id='productquantity' name='productquantity' value='<?php echo"{$product['productquantity']}"; ?>'>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">افزودن به سبد خرید</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <hr class="hr hr-blurry" />
                    <h2>محصولات پیشنهادی</h2>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <?php
                            foreach($suggestion as $product)
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
                <div>
                    <hr class="hr hr-blurry" />
                    <h2>دیدگاه خود را درباره این کالا بیان کنید</h2>
                    <form action="AddComment.php" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control" required />
                            <label class="form-label" for="username">نام</label>
                        </div>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="commenttext" name="commenttext" rows="4" required></textarea>
                            <label class="form-label" for="commenttext">دیدگاه</label>
                        </div>
                        <input type="hidden" id="productid" name="productid" value='<?php echo"{$product['id']}"; ?>'>
                        <input type="hidden" id="confirmation" name="confirmation" value="unconfirmed">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">ثبت</button>
                    </form>
                </div>
                <div>
                    <hr class="hr hr-blurry" />
                    <h2>دیدگاه های شما</h2>
                    <?php
                        foreach($productcomment as $comment)
                            {
                                echo "
                                    <div class='card border border-info shadow-0 mb-3'>
                                        <div class='card-header'>{$comment['username']}</div>
                                        <div class='card-body'>
                                            <p class='card-text'>{$comment['commenttext']}</p>
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
