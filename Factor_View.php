<!doctype html>
<html lang="fa">
    <head>
        <title>فاکتور</title>
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
                <h1>فاکتور خرید شما</h1>
                <div>
                    <h2>اطلاعات خریدار</h2>
                    <hr class="hr hr-blurry" />
                    <p class='card-text'>نام خریدار : <?php echo "{$user['firstname']}"; ?></p>
                    <p class='card-text'>نام خانوادگی خریدار : <?php echo "{$user['lastname']}"; ?></p>
                    <p class='card-text'>شماره تماس خریدار : <?php echo "{$user['number']}"; ?></p>
                    <p class='card-text'>ایمیل خریدار : <?php echo "{$user['email']}"; ?></p>
                    <h2>اطلاعات خرید</h2>
                    <p class='card-text'>شماره فاکتور : <?php echo "{$order['id']}"; ?></p>
                    <p class='card-text'>کد پستی : <?php echo "{$order['postalcode']}"; ?></p>
                    <p class='card-text'>آدرس : <?php echo "{$order['address']}"; ?></p>
                    
                    <?php
                        $allsum = 0;
                        foreach($basket as $product_basket)
                            {
                                include 'ViewProductInBasket.php';
                                echo "
                                    <hr class='hr hr-blurry' />
                                    <div class='card border border-info mb-3'>
                                        <div class='row g-0'>
                                            <div class='col-md-4'>
                                                <img
                                                    src='{$img}'
                                                    alt='Trendy Pants and Shoes'
                                                    class='img-fluid rounded-start'
                                                />
                                            </div>
                                            <div class='col-md-8'>
                                                <div class='card-body'>
                                                    <h3 class='card-title'>{$name}</h3>
                                                    <p class='card-text'>قیمت واحد : {$productprice}</p>
                                                    <p class='card-text'>تعداد : {$product_basket['productnumber']}</p>
                                                    <hr class='hr hr-blurry' />
                                                    <p class='card-text'>قیمت مجموع : {$sum}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                                $allsum = $allsum + $price;
                            }
                    ?>
                    <hr class='hr hr-blurry' />
                    <div class='card border border-info mb-3'>
                        <div class='row g-0'>
                            <div class='card-body'>
                                <form action='Payment.php' method='post' class='col-md-3'>
                                    <div class='form-outline mb-4'>
                                        <label class='form-label' for='allsum'>قیمت کل : <?php echo "{$allsum}"; ?></label>
                                    </div>
                                    <input type='hidden' id='orderid' name='orderid' value='<?php echo "{$order['id']}"; ?>'>
                                    <button type='submit' name='submit' class='btn btn-primary btn-block'>ثبت و پرداخت</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>