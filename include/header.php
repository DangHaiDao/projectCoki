<?php
require_once '../database/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- fancyapp -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link file js -->
    <!-- <link rel="stylesheet" href="../assets/js/chatbox.js">
    <link rel="stylesheet" href="../assets/js/showminicart.js">
    <link rel="stylesheet" href="../assets/js/productdetail.js">
    <link rel="stylesheet" href="../assets/js/homepage.js"> -->
    <link rel="stylesheet" href="../assets/js/contact.js">

    <!-- link file css -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/about_us.css">
    <link rel="stylesheet" href="../assets/css/payment.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/productdetail.css">
    <link rel="stylesheet" href="../assets/css/style-login.css">
    <link rel="stylesheet" href="../assets/css/style-restore.css">
    <link rel="stylesheet" href="../assets/css/style-signup.css">

    <!-- <link rel="stylesheet" href="../assets/css/boostrap.css"> -->
    <!-- link google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Tilt+Neon&display=swap"
        rel="stylesheet">

    <!-- header inserted by Tho: start -->

    <!-- header inserted by Tho: end  -->
    <title>CoKi</title>
</head>

<body>
    <header>
        <div id="login-cart">
            <div class="login">
                <?php
                if(isset($_SESSION['useruid']) && isset($_SESSION['username'])){
                    $getName =$_SESSION['username'];
                    echo " <span style='color:red'>Hello $getName</span><a href='../database/logout.db.php'>
                    <i class='fa-regular fa-user fa-xl' style='color: #3b413e;'></i>
                    <span class='login-text'>Log out</span>
                </a> " ;
                }
                else{
                    echo"<a href='login.php'>
                    <i class='fa-regular fa-user fa-xl' style='color: #3b413e;'></i>
                    <span class='login-text'>Log in</span>
                </a>";
                }
                ?>

            </div>
            <form method='post' action='cart.php'>
                <div class="cart">
                    <button class="btn_show-cart">
                        <i class="fa-solid fa-cart-shopping fa-xl" style="color: #3b413e;"></i>
                        <!-- <span class="cart-number">0</span> -->
                    </button>
                    <input type='hidden' value='0' name='qntP'>
                </div>
            </form>
        </div>
        <!-- show mini cart -->
        <div class="cart_mini-main">
            <div class="cart-detail_item cart-mini_item">
                <div class="car-detail_img"><img src="../assets/img/gau1.webp" id="cart-product_img"></div>
                <div class="car-detail-content">
                    <p id="cart_mini-title">
                        Leo the lion
                        <i class="fa-solid fa-x"></i>
                    </p>
                    <!-- Chỉnh giá phụ thuộc trang sản phẩm -->
                    <span><span class="cart-content__money">1,466,000</span>đ</span>
                    <!--  -->
                    <div class="cart-detail_qnt">
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i></span>
                        <input type="text" name="" id="" value="1">
                        <span><i class="fa-solid fa-plus" style="color: #000000;"></i></span>
                    </div>
                </div>
            </div>

            <div class="cart-detail_item cart-mini_item">
                <div class="car-detail_img"><img src="../assets/img/khi_giohang.webp" id="cart-product_img"></div>
                <div class="car-detail-content">
                    <p id="cart_mini-title">
                        Leo the lion
                        <i class="fa-solid fa-x"></i>
                    </p>
                    <!-- Chỉnh giá phụ thuộc trang sản phẩm -->
                    <span>
                        <span class="cart-content__money price_sales">969,000</span>
                        <span class="cart-content__money price_ori">1,466,000đ</span>
                    </span>
                    <!--  -->
                    <div class="cart-detail_qnt">
                        <span><i class="fa-solid fa-minus" style="color: #000000;"></i></span>
                        <input type="text" name="" id="" value="1">
                        <span><i class="fa-solid fa-plus" style="color: #000000;"></i></span>
                    </div>
                </div>
            </div>


            <div class="cart_container-payment cart_mini-GtCart">
                <p class="cart-payment_subtotal">
                    <span>Subtotal</span>
                    <span><span>6,8383,000</span>đ</span>
                </p>

                <div class="cart-payment_info">
                    Interest free payments with Four Logo available on orders $30.00 - $1,000.00
                    <i class="fa-solid fa-info"
                        style="font-size: 10px; color: #000000; cursor:pointer; padding: 2px 4px; border: 1px solid #000000; border-radius: 50%"></i>
                </div>

                <p class="cart-payment_saving">
                    <span>Total Savings</span>
                    <span><span>497,000</span>đ</span>
                </p>
                <p class="cart-payment_tax">Tax included and shipping calculated at checkout</p>
                <form action="cart.php">
                    <button class="cart-btn_checkout">GO TO CART</button>
                </form>
            </div>
        </div>
        <!-- end login and cart -->

        <!-- start navigation section -->
        <div class="container-nav">
            <div class="logo">
                <a href="Homepage.php" class="logo-coki">
                    <img src="../assets/img/coki-logo.png" alt="CoKi">
                </a>
            </div>
            <div class="menu">
                <div class="product-type">
                    <a href="product.php" class="showAllP"><span>Categories</span></a>
                    <p class="icon-chevron-down"><i class="fa-solid fa-chevron-down fa-xs" style="color: #3b413e;"></i>
                    </p>

                    <form method="post">
                        <ul class="list-option">
                            <!-- Danh mục -->
                        </ul>
                    </form>
                </div>
                <div class=" about-us">
                    <a href="about_us.php"><span>About COKI</span></a>
                </div>
                <div class="contact-us">
                    <a href="contact.php"><span>Contact Us</span></a>
                </div>
            </div>
            <div class="search">
                <input type="text" class="header-my-input" placeholder="Search">
                <span>
                    <i class="fa-solid fa-magnifying-glass btn_search" style="color: #3b413e;"></i>
                </span>
            </div>
        </div>
    </header>
    <div class="sale-ten-percent">
        <p>SAVE 10%</p>
    </div>


    <!-- Hàm hiện danh mục sản phẩm -->
    <script>
    $(document).ready(function() {
        $.ajax({
            url: "../database/addProduct.php",
            type: "POST",
            data: {
                action: 'showCate'
            },
            success: function(respond) {
                $(".list-option").append(respond);
            },
        });
    })
    </script>