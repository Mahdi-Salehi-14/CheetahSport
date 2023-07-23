<!doctype html>
<html lang="fa">
    <head>
        <title>اطلاعات سفارش</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>اطلاعات سفارش خریدار</h1>
                <div>
                    <h2>اطلاعات خریدار</h2>
                    <hr class="hr hr-blurry" />
                    <p class='card-text'>نام خریدار : <?php echo "{$orderuser['firstname']}"; ?></p>
                    <p class='card-text'>نام خانوادگی خریدار : <?php echo "{$orderuser['lastname']}"; ?></p>
                    <p class='card-text'>شماره تماس خریدار : <?php echo "{$orderuser['number']}"; ?></p>
                    <p class='card-text'>ایمیل خریدار : <?php echo "{$orderuser['email']}"; ?></p>
                    <h2>اطلاعات خرید</h2>
                    <p class='card-text'>شماره فاکتور : <?php echo "{$order['id']}"; ?></p>
                    <p class='card-text'>کد پستی : <?php echo "{$order['postalcode']}"; ?></p>
                    <p class='card-text'>آدرس : <?php echo "{$order['address']}"; ?></p>
                    
                    <?php
                        foreach($orderitem as $productinorder)
                            {
                                include 'ViewProductInOrder.php';
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
                                                    <p class='card-text'>تعداد : {$productinorder['productnumber']}</p>
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
    </body>
</html>