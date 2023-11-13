function calTotal(){
    var inf = $(".cart_container-detail").find(".cart-detail_item")
    var total = 0;
    inf.each(function(){
        total += Number($(this).find("#cart__price-total span").text());
    })
    $(".cart_container-payment").find("#subtotal_money").html(total);
}

$(document).on("click", ".cart-detail_del*", function(){
    var dele = $(this).parent().find(".delCart").val();
    $.ajax({
        url: "../database/addCart.php",
        type: "POST",
        data: {del: dele}
    })
    $(this).parent().parent().remove();
    calTotal();
})

