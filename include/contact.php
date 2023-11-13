<?php include_once ("header.php");?>
<div class="contact-container">
    <div class="product-name-page">
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
                <a href="Homepage.php" class="magic-text">HOME</a>
                <span style="color:blueviolet"> / </span>
                <a href="" class="magic-text">CONTACT US</a>
            </span>
        </h2>
    </div>
    <div class="contact-header">
        <h5 class="contact-header-h3">Contact Us</h5>
    </div>
    <div class="contact-phone-mail-location">
        <div class="location more_info">
            <span>
                <i class="fa-solid fa-location-dot fa-2xl " style="color:#D88F71"></i>
            </span>
            <span>UIT</span>
        </div>
        <div class="phone more_info">
            <span>
                <i class="fa-solid fa-phone fa-2xl" style="color:#D88F71"></i>
            </span>
            <span>+84999888989</span>
        </div>
        <div class="mail more_info">
            <span>
                <i class="fa-solid fa-envelope fa-2xl" style="color:#D88F71"></i>
            </span>
            <span>CokiStore@gmail.com</span>
        </div>
    </div>
    <!-- nội dung liên hệ -->
    <div class="contact-content ">
        <p>Get in touch with CoKi for any questions,inquiries, or assistance. I love hearing <br>
            from people and I always personally answer all the emails. Fill out our contact form or <br>
            email me at <a class="email-shop" href="#">CokiStore@gmail.com</a> I look forward to hearing from you! <br>
        </p>
    </div>
    <!-- form thông tin liên hệ -->
    <div class="contact-form">
        <form id="my-form" action="../database/contact.db.php" method="post">

            <table class="tbl-form">
                <tr>
                    <td>
                        <p>Full Name</p>
                        <input class="contact-name-infor" name="name-contact" type="text" placeholder="First Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Email</p>
                        <input type="email" class="contact-email-infor" name="email-contact" value=""
                            placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Phone Number</p>
                        <input type="text" class="contact-phone_number-infor" name="phone-contact" value=""
                            placeholder="Phone Number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Message</p>
                        <textarea class="contact-mess-infor" name="message-contact" placeholder="Message"></textarea>
                    </td>
                </tr>
            </table>
            <div>
                <button type="button" id="btn-send-contact" class="btn-send-contact"
                    onclick="sendData()">Submit</button>
            </div>
        </form>
    </div>
    <div class="social-contact">
        <p>You can also contact us on</p>
        <a href="https://www.facebook.com/CoKiStore2023" target="_blank" class="facebook-contact"><i
                class="fa-brands fa-facebook" title="Facebook"></i></a>
        <a href="troll.php" target="_blank" class="insta-contact"><i class="fa-brands fa-instagram"
                title="Instagram"></i></a>
        <a href="troll.php" target="_blank" class="tiktok-contact"><i class="fa-brands fa-tiktok"
                title="Tiktok"></i></a>
        <a href="troll.php" target="_blank" class="X-twitter-contact"><i class="fa-brands fa-twitter"
                title="Twitter"></i></a>

    </div>
    <!-- xác nhận gửi thông tin -->
    <div class="confirm-send-info display-none">
        <span><i class="fa-solid fa-xl fa-heart" style="color: #f50000;"></i></span>
        <span>Thank you for reaching out to CoKi</span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// $('.confirm-send-info').hide();

function sendData() {
    var name = $('.contact-name-infor').val();
    var email = $('.contact-email-infor').val();
    var message = $('.contact-mess-infor').val();
    var phone = $('.contact-phone_number-infor').val();

    var formData = new FormData();
    formData.append('name-contact', name);
    formData.append('email-contact', email);
    formData.append('message-contact', message);
    formData.append('phone-contact', phone);
    formData.append('submit', 'true');
    var xhr = new XMLHttpRequest();

    // Xác định hành động sau khi nhận được phản hồi từ tệp PHP
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response == true) {
                    $('.confirm-send-info').removeClass('display-none');
                    $('.confirm-send-info').animate({
                        'margin-right': '0'
                    }, 500).delay(2000);
                    $('.confirm-send-info').fadeOut('slow');
                }
            }
        }
    };

    xhr.open('POST', '../database/contact.db.php', true);
    xhr.send(formData);
}
</script>
<?php include_once "footer.php";?>