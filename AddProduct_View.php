<!doctype html>
<html lang="fa">
    <head>
        <title>ورود اطلاعات محصول</title>
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
                <h1>ورود اطلاعات محصول جدید</h1>
                <div>
                    <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="producttitle" name="producttitle" class="form-control form-control-lg" required />
                            <label class="form-label" for="producttitle">عنوان</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="productname" name="productname" class="form-control form-control-lg" required />
                            <label class="form-label" for="productname">نام</label>
                        </div>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="productdescription" name="productdescription" rows="4" required></textarea>
                            <label class="form-label" for="productdescription">توضیحات</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="productcode" name="productcode" class="form-control form-control-lg" required />
                            <label class="form-label" for="productcode">کد</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="category" value="sportshoes" id="sportshoes" autocomplete="off" checked />
                            <label class="btn btn-secondary" for="sportshoes">کفش ورزشی</label>

                            <input type="radio" class="btn-check" name="category" value="sportsequipment" id="sportsequipment" autocomplete="off" />
                            <label class="btn btn-secondary" for="sportsequipment">وسیله ورزشی</label>

                            <input type="radio" class="btn-check" name="category" value="womensportswear" id="womensportswear" autocomplete="off" />
                            <label class="btn btn-secondary" for="womensportswear">لباس ورزشی زنانه</label>

                            <input type="radio" class="btn-check" name="category" value="mensportswear" id="mensportswear" autocomplete="off" />
                            <label class="btn btn-secondary" for="mensportswear">لباس ورزشی مردانه</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="brand" value="adidas" id="adidas" autocomplete="off" checked />
                            <label class="btn btn-secondary" for="adidas">Adidas</label>

                            <input type="radio" class="btn-check" name="brand" value="nike" id="nike" autocomplete="off" />
                            <label class="btn btn-secondary" for="nike">Nike</label>

                            <input type="radio" class="btn-check" name="brand" value="reebok" id="reebok" autocomplete="off" />
                            <label class="btn btn-secondary" for="reebok">Reebok</label>

                            <input type="radio" class="btn-check" name="brand" value="underarmour" id="underarmour" autocomplete="off" />
                            <label class="btn btn-secondary" for="underarmour">Under Armour</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="productprice" name="productprice" class="form-control form-control-lg" required />
                            <label class="form-label" for="productprice">قیمت</label>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="productimg">عکس</label>
                            <input type="file" class="form-control form-control-lg" name="productimg" id="productimg" />
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ثبت محصول</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>