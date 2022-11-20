<!doctype html>
<html lang="fa">
    <head>
        <title>خرید ها</title>
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
                <h1>خرید های شما</h1>
                <hr class="hr hr-blurry" />
                <div>
                <h2>تعداد سفارش های شما : <?php echo"{$count}" ?></h2>
                <?php
                    foreach($order as $order_product)
                        {
                            if($order_product['payment'] == 'check-bank'){
                                $payment = 'پرداخت از طریق فیش یا چک بانکی';
                            }
                            else if($order_product['payment'] == 'door-to-door'){
                                $payment = 'پرداخت درب منزل';
                            }
                            else{
                                $payment = 'پرداخت اینترنتی';
                            }

                            if($order_product['transport'] == 'in-person'){
                                $transport = 'پرداخت درب منزل';
                            }
                            else{
                                $transport = 'ارسال از طریق پست';
                            }
                            echo "
                                <hr class='hr hr-blurry' />
                                <div class='card border border-info shadow-0 mb-3'>
                                    <div class='card-header'><h3>شماره فاکتور : {$order_product['id']}</h3></div>
                                    <div class='card-body'>
                                        <p class='card-text'>روش پرداخت : {$payment}</p>
                                        <p class='card-text'>روش ارسال : {$transport}</p>
                                        <p class='card-text'>کد پستی : {$order_product['postalcode']}</p>
                                        <p class='card-text'>آدرس : </p><p>{$order_product['address']}</p>
                                    </div>
                                    <div class='card-footer bg-transparent'>
                                        <a href = 'PurchaseDetail.php?id={$order_product['id']}' class='iconlink basket-iconlink' data-mdb-toggle='tooltip' title='مشاهده اطلاعات خرید'>
                                            <i class='far fa-eye'></i>
                                        </a>
                                    </div>
                                </div>
                            ";
                        }
                ?>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>