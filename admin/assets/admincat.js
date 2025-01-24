


function catfrm() {


    $('.overlay').css(
        'display', 'block'
    );
    $('.catform').css('display', 'block');
    $('.catform').css('transition', '0.4s');
}


function closelogin() {
    $('.overlay').css(
        'display', 'none'
    );
    $('.catform').css('display', 'none');
    $('.catform').css('transition', '0.4s');
}
function sendit() {
    var image = $('#images')[0].files[0];
    var name = $('#imagename').val();
    var offer = $('#offer').val();

    if (image === "" || name === "" || offer === "") {
        if (image == "") {
            $('#images').css(
                'border-color', 'red'
            )
        }
        if (name == "") {
            $('#imagename').css(
                'border-color', 'red'
            )
            $('#imagename::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#imagename').attr('placeholder', 'This field is required')
        }
        if (offer == "") {
            $('#offer').css(
                'border-color', 'red'
            )
            $('#offer::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#offer').attr('placeholder', 'This field is required')
        }
    }

    else {





        var form_data = new FormData();
        form_data.append('image', image);
        form_data.append('name', name);
        form_data.append('offer', offer);


        $.ajax({
            type: "POST",
            url: "controllers/catadd.php",
            data: form_data,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                window.location.reload();
            }
        });
    }
}
$(document).ready(function () {

    $('.deactivate-cat').click(function () {
        alert("hello");
        var button = $(this);
        var id = button.data('id');
        console.log(id)
        $.ajax({
            type: "POST",
            url: "controllers/catadd.php",
            data: {
                id: id
            },
            success: function (response) {
                console.log(response);
                window.location.reload();
            }
        });

    });

})
