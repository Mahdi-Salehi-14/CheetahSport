<!doctype html>
<html lang="fa">
    <head>
        <title>ثبت نام</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div>
            <hr class="hr hr-blurry" />
            <h1>ثبت نام کاربر جدید</h1>
                <div>
                    <p>حساب کاربری دارید؟ <a href="Login.php">به جای آن، وارد شوید!</a></p>
                    <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" required />
                            <label class="form-label" for="firstname">نام</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" required />
                            <label class="form-label" for="lastname">فامیل</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="gender" id="malegender" autocomplete="off" checked />
                            <label class="btn btn-secondary" for="malegender">مذکر</label>
                            <input type="radio" class="btn-check" name="gender" id="femalegender" autocomplete="off" />
                            <label class="btn btn-secondary" for="femalegender">مونث</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="kodmeli" name="kodmeli" class="form-control" required />
                            <label class="form-label" for="kodmeli">کد ملی</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                            <label class="form-label" for="email">ایمیل</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="number" name="number" class="form-control form-control-lg" required />
                            <label class="form-label" for="number">موبایل</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                            <label class="form-label" for="password">کلمه ورود</label>
                        </div>
                        <input type="hidden" id="role" name="role" value="normaluser">
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ثبت نام</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>