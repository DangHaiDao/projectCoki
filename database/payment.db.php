<?php include '../database/connect.php'?>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

$jsonString = $_POST['jsonstring'];
$arrayObject = json_decode($jsonString);
$date = date('H:i d-m-Y');

if(isset($_POST['submit'])){
    foreach ($arrayObject as $object){
        $name = $object->name;
        $price = $object->price;
        $quantity = $object->qnt;
    mysqli_query($connect,"INSERT INTO giaodich(title, price, quantity,date_giaodich) VALUES ('$name','$price','$quantity','$date')");
    }

    $name = $_POST['name'];
	$email = $_POST['email'];
	$note = $_POST['note'];
    $address = $_POST['addr'];
    $phone = $_POST['phone'];
    $totalPrice = $_POST['total'];
    $totalQnt = $_POST['total_qnt'];
    $sql_payment = "INSERT INTO orders(fullname,email,phone_number,address,order_date,quantity,price,note) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($connect);
    if(mysqli_stmt_prepare($stmt,$sql_payment)){
        mysqli_stmt_bind_param($stmt,"sssssids",$name,$email,$phone,$address,$date,$totalQnt,$totalPrice,$note);
        mysqli_stmt_execute($stmt);
        header("location:../include/payment.php");
    }

    //
    // $namePrd = $_POST['tmp_name'];
    // $pricePrd = $_POST['tmp_price'];
    // $qntPrd = $_POST['tmp_qnt'];

    // $sql_giaodich = "INSERT INTO giaodich(title, price, quantity) VALUES (?,?,?)";
    // if (mysqli_stmt_prepare($stmt, $sql_giaodich)) {
    //    for ($i = 0; $i < count($namePrd); $i++) {
    //     $name = $namePrd[$i];
    //     $price = $pricePrd[$i];
    //     $quantity = $qntPrd[$i];

    //     mysqli_stmt_prepare($stmt, $sql_giaodich);
    //     mysqli_stmt_bind_param($stmt, 'sss', $name, $price, $quantity);
    //     mysqli_stmt_execute($stmt);
    // }

}