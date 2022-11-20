<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول کامنت ها</title>
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
                <h1>جدول کامنت های کاربران</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>
                                کد
                            </th>
                            <th>
                                نام کاربر
                            </th>
                            <th>
                                محصول
                            </th>
                            <th>
                                وضعیت
                            </th>
                            <th>
                                عملیات
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($commentdatatable as $comment)
                                    {
                                        echo "
                                            <tr>
                                                <td>
                                                    {$comment['id']}
                                                </td>
                                                <td>
                                                    {$comment['username']}
                                                </td>
                                                <td>
                                                    {$comment['productid']}
                                                </td>
                                                <td>
                                                    {$comment['confirmation']}
                                                </td>
                                                <td>
                                                    <a href = 'RemoveComment.php?id={$comment['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='حذف'>
                                                        <i class='far fa-trash-alt'></i>
                                                    </a>
                                                    <a href = 'EditComment.php?id={$comment['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='مشاهده و ویرایش'>
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