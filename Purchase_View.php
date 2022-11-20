<!doctype html>
<html lang="fa">
    <head>
        <title>فرایند خرید</title>
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
                <h1>تکمیل فرایند خرید</h1>
                <div>
                    <form action="Factor.php" method="post" class="col-md-3">
                        <input type='hidden' id='userid' name='userid' value='{$uid}'>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
                            <label class="form-label" for="address">آدرس</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="postalcode" name="postalcode" class="form-control" required />
                            <label class="form-label" for="postalcode">کد پستی 10 رقمی (بدون خط تیره وارد شود)</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="transport" id="in-person" value="in-person" autocomplete="off" />
                            <label class="btn btn-secondary" for="in-person">تحویل حضوری</label>

                            <input type="radio" class="btn-check" name="transport" id="mail" value="mail" autocomplete="off" />
                            <label class="btn btn-secondary" for="mail">ارسال پست</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="payment" id="check-bank" value="check-bank" autocomplete="off" />
                            <label class="btn btn-secondary" for="check-bank">چک یا رسید بانکی</label>

                            <input type="radio" class="btn-check" name="payment" id="door-to-door" value="door-to-door" autocomplete="off" />
                            <label class="btn btn-secondary" for="door-to-door">درب منزل</label>

                            <input type="radio" class="btn-check" name="payment" id="internet" value="internet" autocomplete="off" />
                            <label class="btn btn-secondary" for="internet">پرداخت اینترنتی</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">صدور فاکتور</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>