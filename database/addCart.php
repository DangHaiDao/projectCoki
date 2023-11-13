<?php 
require_once 'session.php';

if(isset($_SESSION['useruid']) && isset($_SESSION['username'])){
 if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    // Xóa sản phẩm trong giỏ hàng
    if(isset($_POST['del']) && ($_POST['del'] >= 0)){
        array_splice($_SESSION['giohang'], $_POST['del'], 1);
    }

    if(isset($_POST['btnATC']) && ($_POST['btnATC'])){
        // lấy giá trị
        $img = $_POST['img'];
        $name = $_POST['name'];
        $realP = $_POST['realP'];
        $saleP = $_POST['saleP'];
        $qnt = $_POST['qntP'];
        // kiểm tra sp có trong giỏ hàng không
        $flag = 0; // biến cờ
        for($i = 0; $i<sizeof($_SESSION['giohang']); $i++){
            if($_SESSION['giohang'][$i][1] == $name){
                $flag = 1;
                $qntN = $qnt + $_SESSION['giohang'][$i][4];
                $_SESSION['giohang'][$i][4] = $qntN;
                break;
            }
        }

        // Nếu không trùng thì thêm mới
        if($flag == 0){
        // tạo mảng
            $sp = [$img, $name, $realP, $saleP, $qnt];
            if($sp[$qnt]>0){
                $_SESSION['giohang'][] = $sp;
            }              
        }

        function showCart(){
            if(isset($_SESSION['giohang'])&& is_array($_SESSION['giohang'])){
                $tong = 0;
                for($i = 0; $i<sizeof($_SESSION['giohang']); $i++){
                    $tt = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                    $tong += $tt;
                    echo '
                    <div class="cart-detail_item">
                        <div class="car-detail_img"><img src="'.$_SESSION['giohang'][$i][0].'" id="cart-product_img"></div>
                        <div class="car-detail-content">
                            
                                <div class="cart-detail_del">
                                    Remove <i class="fa-solid fa-x"></i>
                                </div>
                            <input type="hidden" value="'.$i.'" class="delCart">

                            <h3 id="cart-content__title">'.$_SESSION['giohang'][$i][1].'</h3>
                            <!-- Chỉnh giá phụ thuộc trang sản phẩm -->
                            <p>
                                <span class="cart-content__money price_sales">'.$_SESSION['giohang'][$i][3].'</span>
                                <span class="cart-content__money price_ori">'.$_SESSION['giohang'][$i][2].'đ</span>
                            </p>
                            <!--  -->
                            <div class="cart-detail_qnt">
                                <span><i class="fa-solid fa-minus" style="color: #000000;"></i></span>
                                <input type="text" name="" id="qnt_Product-cart" value="'.$_SESSION['giohang'][$i][4].'">
                                <span><i class="fa-solid fa-plus" style="color: #000000;"></i></span>
                            </div>
                            <p id="cart__price-total">
                                <b style="font-weight: bolder">Total:</b>
                                <span>'.$tt.'</span>đ
                            </p>
                        </div>
                    </div>
                    ';
                }
                echo '
                </div>
                    <div class="cart_container-payment">
                        <p class="cart-payment_subtotal">
                            <span>Subtotal</span>
                            <span><span id="subtotal_money">'.$tong.'</span>đ</span>
                        </p>
                        <div class="cart-payment_info">
                            Interest free payments with Four Logo available on orders $30.00 - $1,000.00
                            <i class="fa-solid fa-info"
                                style="font-size: 10px; color: #000000; cursor:pointer; padding: 2px 4px; border: 1px solid #000000; border-radius: 50%"></i>
                        </div>
                        <p class="cart-payment_tax">Tax included and shipping calculated at checkout</p>
                        <button class="cart-btn_checkout"><i class="fa-solid fa-lock"
                                style="color: #ffffff; margin-right: 10px"></i>CHECKOUT
                        </button>
                        <div class="cart-continue">
                            <a href="product.php">CONTINUE SHOPPING</a>
                        </div>
                    </div>
                ';
            }
        }
    }
}
else{
    header('location:../include/login.php');
    exit;
    
}
?>