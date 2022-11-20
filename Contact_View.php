<!doctype html>
<html lang="fa">
    <head>
        <title>تماس با ما</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>تماس با ما</h1>
                <div>
                    <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="title" name="title" class="form-control form-control-lg" required />
                            <label class="form-label" for="title">عنوان</label>
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
                            <textarea class="form-control" id="textarea" name="textarea" rows="4" required></textarea>
                            <label class="form-label" for="textarea">پیام</label>
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ارسال</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>