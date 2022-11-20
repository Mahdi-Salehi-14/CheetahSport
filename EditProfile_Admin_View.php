<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایش اطلاعات</title>
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
                <h1>اطلاعات کاربر را ویرایش کنید</h1>
                <div>
                <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" value = "<?php echo $firstname; ?>" required />
                            <label class="form-label" for="firstname">نام</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" value = "<?php echo $lastname; ?>" required />
                            <label class="form-label" for="lastname">فامیل</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="gender" id="malegender" <?php if($gender == 'male') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="malegender">مذکر</label>
                            <input type="radio" class="btn-check" name="gender" id="femalegender" <?php if($gender == 'female') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="femalegender">مونث</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="kodmeli" name="kodmeli" class="form-control" value = "<?php echo $kodmeli; ?>" required />
                            <label class="form-label" for="kodmeli">کد ملی</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" value = "<?php echo $email; ?>" required />
                            <label class="form-label" for="email">ایمیل</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="number" name="number" class="form-control form-control-lg" value = "<?php echo $number; ?>" required />
                            <label class="form-label" for="number">موبایل</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" value = "<?php echo $password; ?>" required />
                            <label class="form-label" for="password">کلمه ورود</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="role" value="adminuser" id="adminuser" <?php if($role == 'adminuser') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="adminuser">ادمین</label>
                            <input type="radio" class="btn-check" name="role" value="normaluser" id="normaluser" <?php if($role == 'normaluser') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="normaluser">عادی</label>
                            <input type="radio" class="btn-check" name="role" value="blockuser" id="blockuser" <?php if($role == 'blockuser') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="blockuser">مسدود</label>
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ذخیره اطلاعات</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>