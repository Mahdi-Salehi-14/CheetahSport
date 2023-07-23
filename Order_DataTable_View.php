<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول سفارش ها</title>
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
                <h1>جدول اطلاعات سفارش ها</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>
                                    کد
                                </th>
                                <th>
                                    کد پستی
                                </th>
                                <th>
                                    روش ارسال
                                </th>
                                <th>
                                    نوع پرداخت
                                </th>
                                <th>
                                    عملیات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($orderdatatable as $order)
                                    {
                                        if($order['transport'] == 'mail')
                                        {
                                            $transport = "ارسال با پست";
                                        }
                                        elseif($order['transport'] == 'in-person')
                                        {
                                            $transport = "تحویل حضوری";
                                        }

                                        if($order['payment'] == 'door-to-door')
                                        {
                                            $payment = "پرداخت درب منزل";
                                        }
                                        elseif($order['payment'] == 'internet')
                                        {
                                            $payment = "پرداخت اینترنتی";
                                        }
                                        elseif($order['payment'] == 'check-bank')
                                        {
                                            $payment = "رسید یا چک بانکی";
                                        }
                                        
                                        echo "
                                            <tr>
                                                <td>
                                                    {$order['id']}
                                                </td>
                                                <td>
                                                    {$order['postalcode']}
                                                </td>
                                                <td>
                                                    {$transport}
                                                </td>
                                                <td>
                                                    {$payment}
                                                </td>
                                                <td>
                                                    <a href = 'ViewOrder.php?id={$order['id']}' class='btn btn-link btn-sm px-3' data-ripple-color='dark' data-mdb-toggle='tooltip' title='مشاهده'>
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