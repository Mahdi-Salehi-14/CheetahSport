<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول محصولات</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Styles\css\mdb.rtl.min.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div>
                <hr class="hr hr-blurry" />
                <h1>جدول اطلاعات محصولات</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>
                                    کد
                                </th>
                                <th>
                                    نام
                                </th>
                                <th>
                                    تعداد
                                </th>
                                <th>
                                    دسته
                                </th>
                                <th>
                                    برند
                                </th>
                                <th>
                                    قیمت
                                </th>
                                <th>
                                    عملیات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($productdatatable as $product)
                                    {
                                        echo "
                                            <tr>
                                                <td>
                                                    {$product['id']}
                                                </td>
                                                <td>
                                                    {$product['productname']}
                                                </td>
                                                <td>
                                                    {$product['productquantity']}
                                                </td>
                                                <td>
                                                    {$product['category']}
                                                </td>
                                                <td>
                                                    {$product['brand']}
                                                </td>
                                                <td>
                                                    {$product['productprice']}
                                                </td>
                                                <td>
                                                    <a href = 'EditProduct.php?id={$product['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='ویرایش'>
                                                        <i class='far fa-edit'></i>
                                                    </a>
                                                    <a href = 'RemoveProduct.php?id={$product['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='حذف'>
                                                        <i class='far fa-trash-alt'></i>
                                                    </a>
                                                    <a href = 'ViewProduct.php?id={$product['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='مشاهده'>
                                                        <i class='far fa-eye'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>