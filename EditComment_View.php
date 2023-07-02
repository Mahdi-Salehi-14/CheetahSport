<!doctype html>
<html lang="fa">
    <head>
        <title>مشاهده کامنت</title>
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
                <h1>مشاهده و ویرایش کامنت کاربر</h1>
                <div>
                    <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" value = "<?php echo $username; ?>" disabled />
                            <label class="form-label" for="username">نام</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="bumber" id="productid" name="productid" class="form-control form-control-lg" value = "<?php echo $productid; ?>" disabled />
                            <label class="form-label" for="productid">آی دی محصول مورد نظر</label>
                        </div>
                        <div class="mb-4">
                            <button type="button" class="btn btn-link" data-mdb-ripple-color="dark"><a href='ViewProduct.php?id=<?php echo $productid; ?>'>مشاهده محصول مورد نظر</a></button>
                        </div>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="commenttext" name="commenttext" rows="4" required><?php echo $commenttext; ?></textarea>
                            <label class="form-label" for="commenttext">دیدگاه کاربر</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="confirmation" value="confirmed" id="confirmed" autocomplete="off" <?php if($confirmation == 'confirmed') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="confirmed">تایید شده</label>
                            <input type="radio" class="btn-check" name="confirmation" value="unconfirmed" id="unconfirmed" autocomplete="off" <?php if($confirmation == 'unconfirmed') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="unconfirmed">تایید نشده</label>
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ویرایش</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>