<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول پیام ها</title>
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
                <h1>جدول پیام های کاربران</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>
                                    کد
                                </th>
                                <th>
                                    عنوان
                                </th>
                                <th>
                                    ایمیل
                                </th>
                                <th>
                                    شماره تماس
                                </th>
                                <th>
                                    عملیات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($messagedatatable as $message)
                                    {
                                        echo "
                                            <tr>
                                                <td>
                                                    {$message['id']}
                                                </td>
                                                <td>
                                                    {$message['title']}
                                                </td>
                                                <td>
                                                    {$message['email']}
                                                </td>
                                                <td class = 'table-number'>
                                                    {$message['number']}
                                                </td>
                                                <td>
                                                    <a href = 'RemoveContact.php?id={$message['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='حذف'>
                                                        <i class='far fa-trash-alt'></i>
                                                    </a>
                                                    <a href = 'ViewContact.php?id={$message['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='مشاهده'>
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