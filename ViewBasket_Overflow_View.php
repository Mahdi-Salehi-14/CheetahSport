<!doctype html>
<html lang="fa">
    <head>
        <title>سبد خرید</title>
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
                <h1>سبد خرید شما</h1>
                <?php
                    $allsum = 0;
                    foreach($basket as $product_basket)
                        {
                            include 'ViewProductInBasket.php';
                            echo "
                                <hr class='hr hr-blurry' />
                                <div class='card border border-info mb-3'>
                                    <div class='row g-0'>
                                        <div class='col-md-4'>
                                            <a href = 'ViewProduct.php?id={$id}'>
                                                <img
                                                    src='{$img}'
                                                    alt='Trendy Pants and Shoes'
                                                    class='img-fluid rounded-start'
                                                />
                                            </a>
                                        </div>
                                        <div class='col-md-8'>
                                            <div class='card-body'>
                                                <h3 class='card-title'><a href = 'ViewProduct.php?id={$product_basket['productid']}'>{$name}</a></h3>
                                                <p class='card-text'>قیمت واحد : {$productprice}</p>
                                                <div class='mb-4'>
                                                    <button type='button' class='btn btn-link' data-mdb-ripple-color='dark'>
                                                        <a href = 'RemoveBasket.php?id={$product_basket['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='حذف'>
                                                            <i class='far fa-trash-alt'></i>
                                                        </a>
                                                    </button>
                                                </div>
                                                <form action='EditBasket.php' method='post' class='col-md-3'>
                                                    <div class='form-outline mb-4'>
                                                        <input type='number' id='productnumber' class='form-control' name='productnumber' min='1' value='{$product_basket['productnumber']}' />
                                                        <label class='form-label' for='productnumber'>ویرایش تعداد کالا</label>
                                                    </div>
                                                    <input type='hidden' id='basketid' name='basketid' value='{$product_basket['id']}'>
                                                    <input type='hidden' id='productid' name='productid' value='{$product_basket['productid']}'>
                                                    <button type='submit' name='submit' class='btn btn-primary btn-block'>ویرایش</button>
                                                </form>
                                                <hr class='hr hr-blurry' />
                                                <p class='card-text'>قیمت مجموع : {$sum}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                            $allsum = $allsum + $price;
                        }
                ?>
                <hr class="hr hr-blurry" />
                <div class='card border border-info mb-3'>
                    <div class='row g-0'>
                        <div class='card-body'>
                            <?php
                                if(isset($product_basket['id'])){
                                    echo"
                                        <form action='Purchase.php' method='post' class='col-md-3'>
                                            <div class='form-outline mb-4'>
                                                <label class='form-label' for='allsum'>قیمت کل : {$allsum}</label>
                                            </div>
                                            <button type='submit' name='submit' class='btn btn-primary btn-block'>تکمیل فرایند خرید</button>
                                        </form>
                                    ";
                                }
                                else{
                                    echo"
                                        <p class='card-text'>سبد خرید شما خالی است</p>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
    <script>
        alert("تعداد محصول انتخاب شده، بیش از تعداد موجودی محصول است");
    </script>
</html>