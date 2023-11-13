<?php
	include('../database/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đơn hàng</title>
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
                <li class=" nav-item">
                    <a class="nav-link" href="lichsugiaodich.php">Lịch sử giao dịch</a>
                </li>

            </ul>
            <div style="text-align:right">
                <a href="../include/login.php">Đăng xuất</a>
            </div>
        </div>
    </nav><br><br>
    <div class="">
        <div class="">
            <?php
			if(isset($_GET['quanly'])=='xemgiaodich&khachhang'){
				$mahang = $_GET['mahang'];
				$sql_chitiet = mysqli_query($connect,"SELECT * FROM orders,product WHERE orders.id=product.id AND product.mahang='$mahang'");
				?>
            <div class="">
                <p>Xem chi tiết đơn hàng</p>
                <form action="" method="POST">
                    <table class="">
                        <tr>
                            <th>Thứ tự</th>
                            <th>Mã đơn</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt</th>
                        </tr>
                        <?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_chitiet)){ 
						$i++;
					?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_donhang['mahang']; ?></td>

                            <td><?php echo $row_donhang['sanpham_name']; ?></td>
                            <td><?php echo $row_donhang['soluong']; ?></td>
                            <td><?php echo $row_donhang['sanpham_giakhuyenmai']; ?></td>
                            <td><?php echo number_format($row_donhang['soluong']*$row_donhang['sanpham_giakhuyenmai']).'vnđ'; ?>
                            </td>

                            <td><?php echo $row_donhang['ngaythang'] ?></td>
                            <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang'] ?>">

                            <!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td> -->
                        </tr>
                        <?php
					} 
					?>
                    </table>

                    <select class="form-control" name="xuly">
                        <option value="1">Đã xử lý | Giao hàng</option>
                        <option value="0">Chưa xử lý</option>
                    </select><br>

                    <input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
                </form>
            </div>
            <?php
			}else{
				?>

            <div class="col-md-7">
                <p>Đơn hàng</p>
            </div>
            <?php
			} 
				?>
            <div class="">
                <h4>Liệt kê đơn hàng</h4>
                <?php
                if(isset($_GET['tg'])){
                    $tg = $_GET['tg'];
                    
                }
				$sql_select = mysqli_query($connect,"SELECT * FROM giaodich WHERE date_giaodich='$tg'"); 
				?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                    <?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row_donhang['title'] ?></td>
                        <td><?php echo $row_donhang['quantity'] ?></td>
                        <td><?php echo number_format($row_donhang['price']) ?></td>
                        <td><?php echo number_format(floatval($row_donhang['quantity'])*floatval($row_donhang['price'])) ?>
                        </td>
                    </tr>
                    <?php
					} 
					?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>