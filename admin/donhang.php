<?php
	include('../database/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giao dịch của khách hàng</title>
    <link href="../assets/css/boostrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="xulydanhmuc.php">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="thongtinkhachhang.php">Khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lichsugiaodich.php">Lịch sử giao dịch</a>
                </li>

            </ul>
            <div style="text-align:right">
                <a href="../include/login.php">Đăng xuất</a>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="col-md-8">
            <div>
                <h4>Khách hàng: <?php echo $name ?></h4>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Số thứ tự</th>
                    <th>Đơn hàng</th>
                    <th>Địa chỉ nhận hàng</th>
                </tr>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row_user['phone_number']?></td>
                    <td><?php echo $row_user['email']?></td>
                </tr>
            </table>
        </div>

    </div>

</body>

</html>