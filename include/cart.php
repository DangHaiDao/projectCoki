<?php include "../database/addCart.php"; ?>

<?php include "header.php"; ?>
<div class="cart_main">
    <div class="cart_main-header">
        <h2><span class="magic">
                <span class="magic-star">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                </span>
                <span class="magic-star">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                </span>
                <span class="magic-star">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                </span>
                <a href="#" class="magic-text">HOME</a>
                <span style="color:blueviolet"> / </span>
                <a href="" class="magic-text">SHOPPING CART</a>
            </span>
        </h2>
    </div>
    <div class="cart_container">
        <div class="cart_container-detail">
            <?php showCart(); ?>

            <!-- </div> -->

            <!-- <div class="cart_container-payment">
            <p class="cart-payment_subtotal">
                <span>Subtotal</span>
                <span><span id="subtotal_money">0</span>đ</span>
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
        </div> -->
        </div>
    </div>

    <script src="../assets/js/addCart.js"></script>

    <script>
    $(document).on("click", ".cart-btn_checkout", function() {
        var payment = [];
        var cart = $(".cart-detail_item")
        cart.each(function(index) {
            var inf = {
                name: $(this).find("#cart-content__title").text(),
                price: $(this).find(".price_sales").text(),
                qnt: $(this).find("#qnt_Product-cart").val(),
                total: $(this).find("#cart__price-total span").text()
            };
            if (index > 1) payment.push(inf);
        })
        var paymentJSON = JSON.stringify(payment);
        // console.log(paymentJSON);
        localStorage.setItem("paymentJSON", paymentJSON);
        window.location.href = "../include/payment.php"
    })
    </script>

    <?php include"footer.php" ?>