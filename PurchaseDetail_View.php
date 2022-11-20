<!doctype html>
<html lang="fa">
    <head>
        <title>اطلاعات خرید</title>
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
                <h1>خرید های شما با شماره فاکتور <?php echo"{$oid}" ?></h1>
                <div>
                    <?php
                        $allsum = 0;
                        foreach($orderitem as $order_item)
                            {
                                include 'ViewProductInPurchase.php';
                                echo "
                                    <div class='card border mb-3'>
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
                                                    <p class='card-text'>تعداد : {$order_item['productnumber']}</p>
                                                    <hr class='hr hr-blurry' />
                                                    <p class='card-text'>قیمت مجموع : {$sum}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class='hr hr-blurry' />
                                ";
                                $allsum = $allsum + $price;
                            }
                    ?>
                    <div>
                        <div class='card border mb-3'>
                            <div class='row g-0'>
                                <div class='card-body'>
                                    <p class='card-text'>قیمت کل : <?php echo "{$allsum}"; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>