<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول کاربران</title>
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
                <h1>جدول اطلاعات کاربران</h1>
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
                                    نام خانوادگی
                                </th>
                                <th>
                                    وضعیت
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
                                foreach($userdatatable as $user)
                                    {
                                        echo "
                                            <tr>
                                                <td>
                                                    {$user['id']}
                                                </td>
                                                <td>
                                                    {$user['firstname']}
                                                </td>
                                                <td>
                                                    {$user['lastname']}
                                                </td>
                                                <td>
                                                    {$user['role']}
                                                </td>
                                                <td>
                                                    {$user['email']}
                                                </td>
                                                <td>
                                                    {$user['number']}
                                                </td>
                                                <td>
                                                    <a href = 'EditProfile_Admin.php?id={$user['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='ویرایش'>
                                                        <i class='far fa-edit'></i>
                                                    </a>
                                                    <a href = 'RemoveUser.php?id={$user['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='حذف'>
                                                        <i class='far fa-trash-alt'></i>
                                                    </a>
                                                    <a href = 'ViewProfile_Admin.php?id={$user['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='مشاهده'>
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