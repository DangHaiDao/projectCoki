<?php
	session_start();
 include('../database/connect.php'); 
?>
<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = ($_POST['matkhau']);
		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql_select_admin = mysqli_query($connect,"SELECT * FROM admin WHERE ad_name='$taikhoan' AND ad_password='$matkhau' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap'] = $row_dangnhap['ad_name'];
				$_SESSION['ad_id'] = $row_dangnhap['ad_id'];
				header('Location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập Admin</title>
    <link href="../assets/css/boostrap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <h2 align="center">Đăng nhập Admin</h2>
    <div class="col-md-6">
        <div class="form-group">
            <form action="" method="POST">
                <label>Tài khoản</label>
                <input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
                <label>Mật khẩu</label>
                <input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>
                <input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
            </form>
        </div>
    </div>
</body>

</html>