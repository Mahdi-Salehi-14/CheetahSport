<!doctype html>
<html lang="fa">
    <head>
        <title>پروفایل کاربر</title>
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
                <h1>مشاهده پروفایل کاربر</h1>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card border border-info shadow-0 mb-3 text-center">
                            <div class="card-header">اطلاعات کاربر</div>
                            <div class="card-body">
                                <p class="card-text">نام : <?php echo "{$viewinguser['firstname']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">فامیل : <?php echo "{$viewinguser['lastname']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">جنسیت : <?php if($viewinguser['gender'] == 'male') {echo 'آقا';} else {echo 'خانم';} ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">کد ملی : <?php echo "{$viewinguser['kodmeli']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">ایمیل : <?php echo "{$viewinguser['email']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">شماره تماس : <?php echo "{$viewinguser['number']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">وضعیت : <?php if($viewinguser['role'] == 'adminuser') {echo 'کاربر ادمین';} else if($viewinguser['role'] == 'normaluser') {echo 'کاربر عادی';} else if($viewinguser['role'] == 'deleteuser') {echo 'کاربر حذف شده';} else {echo 'کاربر مسدود';} ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border border-info shadow-0 mb-3 text-center">
                            <div class="card-header">فعالیت های کاربر</div>
                            <div class="card-body">
                                <p class="card-text">تعداد سفارش های کاربر : <?php echo "{$ordercount}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">تعداد محصولاتی که لایک کرده است : <?php echo "{$likecount}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">تعداد محصولاتی که بوکمارک کرده است : <?php echo "{$bookmarkcount}"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>