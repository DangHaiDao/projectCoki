<?php
	include('../database/connect.php');
?>
<?php
$sql = 'SELECT * FROM `user`';
$stmt = mysqli_stmt_init($connect);
if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thông tin khách hàng</title>
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
            <table class="table table-bordered">
                <tr>
                    <th>Số thứ tự</th>
                    <th>Họ và Tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Đơn hàng</th>
                </tr>
                <?php
               $i=0;
                while ($row_user = mysqli_fetch_array($result)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row_user['fullname']?></td>
                    <td><?php echo $row_user['phone_number']?></td>
                    <td><?php echo $row_user['email']?></td>
                    <td><a href="../admin/donhang.php?=<?php echo urlencode($row_user['user_id'])?>">Xem</a></td>
                </tr>
                <?php
                    }
            // Close the statement
            mysqli_stmt_close($stmt);
        }

            ?>
            </table>
        </div>

    </div>

</body>

</html>