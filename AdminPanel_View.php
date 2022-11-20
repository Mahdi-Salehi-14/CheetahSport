<!doctype html>
<html lang = "fa">
    <head>
        <title>داشبورد</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <hr class="hr hr-blurry" />
            <h1>پنل داشبورد</h1>
            <div class="card border border-info shadow-0 mb-3 text-center">
                <div class="card-header">وضعیت سایت</div>
                <div class="card-body">
                    <p class="card-text">تعداد بازدید های سایت : <?php echo "{$visitcount}"; ?></p>
                    <hr class="hr hr-blurry" />
                    <p class="card-text">تعداد سفارش های کاربران : <?php echo "{$ordercount}"; ?></p>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>