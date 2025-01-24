function addcoupon() {
    $('.overlay-').css(
        'display', 'block'
    );
    $('.item-frm').css('display', 'block');
    $('.item-frm').css('transition', '0.4s');
}
function closecouponfrm() {
    $('.overlay-').css(
        'display', 'none'
    );
    $('.item-frm').css('display', 'none');
    $('.item-frm').css('transition', '0.4s');
}

function submitcoupon() {
    var image = $('#coupon-images')[0].files[0];
    var coupon = $('#coupon').val();

    var form_data = new FormData();
    form_data.append('image', image);
    form_data.append('coupon', coupon);

    $.ajax({
        type: "POST",
        url: "../admin/controllers/couponadd.php",
        data: form_data,
        contentType: false,
        processData: false,
        success: function (response) {
            window.location.reload();
        }
    });
}

function confirmDelete() {
    return confirm("Are you sure you want to delete this product?");
}