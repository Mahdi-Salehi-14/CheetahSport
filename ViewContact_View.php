<!doctype html>
<html lang="fa">
    <head>
        <title>پیام</title>
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
                <h1>مشاهده پیام کاربر</h1>
                <div class="row row-cols-1 row-cols-md-1 g-4">
                    <div class="col">
                        <div class="card border border-info shadow-0 mb-3 text-center">
                            <div class="card-header">پیام کاربر</div>
                            <div class="card-body">
                                <p class="card-text">ایمیل : <?php echo "{$message['email']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">موبایل : <?php echo "{$message['number']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">عنوان پیام : <?php echo "{$message['title']}"; ?></p>
                                <hr class="hr hr-blurry" />
                                <p class="card-text">متن پیام : </p>
                                <p class="card-text"><?php echo "{$message['textarea']}"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>