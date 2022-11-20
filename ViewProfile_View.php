<!doctype html>
<html lang="fa">
    <head>
        <title>حساب کاربری</title>
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
                <h1>حساب کاربری شما</h1>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card border border-info shadow-0 mb-3 text-center">
                            <div class="card-header">اطلاعات شخصی</div>
                            <div class="card-body">
                                <p class="card-text">نام : <?php echo "{$user['firstname']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">فامیل : <?php echo "{$user['lastname']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">جنسیت : <?php if($user['gender'] == 'male') {echo 'آقا';} else {echo 'خانم';} ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">کد ملی : <?php echo "{$user['kodmeli']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">ایمیل : <?php echo "{$user['email']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">شماره تماس : <?php echo "{$user['number']}"; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border border-info shadow-0 mb-3 text-center">
                            <div class="card-header">فعالیت ها</div>
                            <div class="card-body">
                                <p class="card-text">تعداد سفارش های شما : <?php echo "{$ordercount}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">تعداد محصولاتی که لایک کردید : <?php echo "{$likecount}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">تعداد محصولاتی که بوکمارک کردید : <?php echo "{$bookmarkcount}"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>