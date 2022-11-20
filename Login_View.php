<!doctype html>
<html lang="fa">
    <head>
        <title>ورود</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>وارد حساب کاربری خود شوید</h1>
                <div>
                    <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                            <label class="form-label" for="email">آدرس ایمیل</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                            <label class="form-label" for="password">کلمه ورود</label>
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ورود</button>
                    </form>
                    <hr class="hr hr-blurry" />
                    <a href="Register.php">هنوز حساب ندارید؟ یکی ایجاد کنید</a>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>