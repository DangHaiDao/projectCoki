<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/payment.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Tilt+Neon&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Payment</title>
</head>
<!-- js -->

<body>
    <form action="../database/payment.db.php" method="post">

        <!-- Khối thông tin thanh toán -->
        <div class="payment_head">
            <!-- note: sửa link a -->
            <a href="product.php"><i class="fa-solid fa-cart-shopping" title="back to product"></i></a>
            <img src="../assets/img/coki-logo.png" alt="">
            <div></div>
        </div>

        <div class="payment_body">

            <div class="payment_body-infor">
                <div class="payment_checkout">Express checkout</div>
                <div class="payment_way">
                    <button id="btnS"><img src="../assets/img/Shopay.png" title="Shop pay"></button>
                    <button id="btnA"><img src="../assets/img/amazon.png" title="Amazon pay"></button>
                    <button id="btnG"><img src="../assets/img/G.png" title="Google pay"></button>

                </div>
                <div class="payment_line">
                    <hr><span>OR</span>
                    <hr>
                </div>
                <div class="payment_info-header">Customer infomation</div>

                <div class="payment_info-name">
                    <label for="">Name</label><br>
                    <input type="text" name="name" id="" placeholder="Melody Mark">
                </div>
                <div class="payment_info-address">
                    <label for="">Address</label><br>
                    <input type="text" name="addr" id="" placeholder="xyz abc 123">
                </div>
                <div class="payment_info-email">
                    <label for="">Email</label><br>
                    <input type="text" name="email" id="" placeholder="abc@gmail.com">
                </div>
                <div class="payment_info-phone">
                    <label for="">Phone</label><br>
                    <input type="text" name="phone" id="" placeholder="0xxxxxxxxxx">
                </div>
                <div class="payment_info-note">
                    <label for="">Note</label>
                    <input type="text" name="note">
                </div>

                <div class="payment_info-header">Payment method</div>
                <div class="payment_method-img">
                    <img src="../assets/img/pay1.png" alt="">
                    <img src="../assets/img/pay2.png" alt="">
                    <img src="../assets/img/pay3.png" alt="">
                    <img src="../assets/img/pay4.png" alt="">
                    <img src="../assets/img/pay5.png" alt="">
                    <img src="../assets/img/pay6.png" alt="">
                </div>
                <div class="raio_method-payment">
                    <input type="radio" name="method" id=""> Cash <br><br>
                    <input type="radio" name="method" id=""> Internet banking <br><br>
                    <input type="radio" name="method" id=""> Ship OCD <br><br>
                </div>
                <button type="submit" name="submit" id="btn-payment_info">Pay now</button>

                <!-- <hr> -->

                <hr color="#EFEFEF">
                <div class="payment_info--policy">
                    <a href="">Refund policy</a>
                    <a href="">Privacy policy</a>
                    <a href="">Terms of policy</a>
                </div>
            </div>

            <!-- Khối chi tiết sản phẩm -->
            <div class="payment_body-detai--Product">
                <div class="payment_body-cart">
                    <div class="payment_body-cart-header">Shopping Cart</div>
                    <div class="payment_body-cart-qnt">0</div>
                </div>

                <div class="payment_body-item">
                    <!-- thông tin đơn hàng -->

                    <!-- Tổng tiền -->
                </div>

                <div class="payment_body_sales">
                    <input type="text" placeholder="Discount code or gift card">
                    <input type="button" value="Apply" id="btn_payment-sale">
                </div>
            </div>

        </div>
    </form>

</body>
<script>
var paymentJSON = localStorage.getItem('paymentJSON');
var payment = JSON.parse(paymentJSON);
var total = 0,
    total_qnt = 0;
var str = '';
var tmpName;
var tmpPrice;
var tmpQnt;
var jsonString = JSON.stringify(payment);

payment.forEach(function(pay) {
    str += `<div class="payment_body-item__detail">
                    <div class="payment__detail-text">
                        ${pay.name} <br> <span>${pay.price} x ${pay.qnt}</span>
                    </div>
                    <div class="payment__detail-money">
                        ${pay.total} đ
                    </div>
            </div>`;
    total += Number(pay.total);
    total_qnt += Number(pay.qnt);
})
str += ` 
        <div class="payment_body-item__detail payment__total">
            <div class="payment__detail-text total">Subtotal</div>
            <div class="payment__detail-total">${total} đ</div>
            <input type='hidden' value='${total}' name='total'>
            <input type='hidden' value='${total_qnt}' name='total_qnt'>
            <input type='hidden' value='${jsonString}' name='jsonstring'>
        </div>
    `;
$(".payment_body-item").append(str);
$(".payment_body-cart-qnt").html(total_qnt);
</script>

</html>