<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایش اطلاعات محصول</title>
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
                <h1>ویرایش اطلاعات محصول</h1>
                <div>
                    <form action="" method="post" class="col-md-3">
                        <div class="form-outline mb-4">
                            <input type="text" id="producttitle" name="producttitle" class="form-control form-control-lg" value = "<?php echo $producttitle; ?>" required />
                            <label class="form-label" for="producttitle">عنوان</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="productname" name="productname" class="form-control form-control-lg" value = "<?php echo $productname; ?>" required />
                            <label class="form-label" for="productname">نام</label>
                        </div>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="productdescription" name="productdescription" rows="4" required><?php echo $productdescription; ?></textarea>
                            <label class="form-label" for="productdescription">توضیحات</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="productcode" name="productcode" class="form-control form-control-lg" value = "<?php echo $productcode; ?>" required />
                            <label class="form-label" for="productcode">کد</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="category" value="sportshoes" id="sportshoes" autocomplete="off" <?php if($category == 'sportshoes') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="sportshoes">کفش ورزشی</label>

                            <input type="radio" class="btn-check" name="category" value="sportsequipment" id="sportsequipment" autocomplete="off" <?php if($category == 'sportsequipment') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="sportsequipment">وسیله ورزشی</label>

                            <input type="radio" class="btn-check" name="category" value="womensportswear" id="womensportswear" autocomplete="off" <?php if($category == 'womensportswear') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="womensportswear">لباس ورزشی زنانه</label>

                            <input type="radio" class="btn-check" name="category" value="mensportswear" id="mensportswear" autocomplete="off" <?php if($category == 'mensportswear') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="mensportswear">لباس ورزشی مردانه</label>
                        </div>
                        <div class="btn-group mb-4">
                            <input type="radio" class="btn-check" name="brand" value="adidas" id="adidas" autocomplete="off" <?php if($brand == 'adidas') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="adidas">Adidas</label>

                            <input type="radio" class="btn-check" name="brand" value="nike" id="nike" autocomplete="off" <?php if($brand == 'nike') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="nike">Nike</label>

                            <input type="radio" class="btn-check" name="brand" value="reebok" id="reebok" autocomplete="off" <?php if($brand == 'reebok') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="reebok">Reebok</label>

                            <input type="radio" class="btn-check" name="brand" value="underarmour" id="underarmour" autocomplete="off" <?php if($brand == 'underarmour') {echo 'checked';} ?> />
                            <label class="btn btn-secondary" for="underarmour">Under Armour</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" id="productprice" name="productprice" class="form-control form-control-lg" value = "<?php echo $productprice; ?>" required />
                            <label class="form-label" for="productprice">قیمت</label>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="productimg">عکس</label>
                            <input type="file" class="form-control form-control-lg" name="productimg" id="productimg" value = "<?php echo $productimg; ?>" />
                        </div>
                        <button type="submit" name = "submit" class="btn btn-primary btn-block">ویرایش</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>