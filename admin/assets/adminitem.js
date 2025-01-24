function additem() {
    $('.overlay').css(
        'display', 'block'
    );
    $('.item-frm').css('display', 'block');
    $('.item-frm').css('transition', '0.4s');
}

function closelogin() {
    $('.overlay').css(
        'display', 'none'
    );
    $('.item-frm').css('display', 'none');
    $('.item-frm').css('transition', '0.4s')
}



function submititem() {
    var image = $('#images')[0].files[0];
    var orgprice = $('#orgprice').val();
    var discprice = $('#finalprice').val();
    var name = $('#name').val();
    var category = $('#category').val();

    if (image === "" || name === "" || orgprice === "" || discprice === "") {
        if (image == "") {
            $('#images').css(
                'border-color', 'red'
            )
        }
        if (name == "") {
            $('#name').css(
                'border-color', 'red'
            )
            $('#name::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#name').attr('placeholder', 'This field is required')
        }
        if (orgprice == "") {
            $('#orgprice').css(
                'border-color', 'red'
            )
            $('#orgprice::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#orgprice').attr('placeholder', 'This field is required')
        }
        if (discprice == "") {
            $('#finalprice').css(
                'border-color', 'red'
            )
            $('#finalprice::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#finalprice').attr('placeholder', 'This field is required')
        }
    }

    else {








        console.log(image, orgprice, discprice, name);
        var form_data = new FormData();
        form_data.append('image', image);
        form_data.append('name', name);
        form_data.append('orgprice', orgprice);
        form_data.append('discprice', discprice);
        form_data.append('category', category);

        $.ajax({
            type: "POST",
            url: "../admin/controllers/itemadd.php",
            data: form_data,
            contentType: false,
            processData: false,
            success: function (response) {
                window.location.reload();
            }
        });
    }
}

var id;
function confirmDelete() {
    return confirm("Are you sure you want to delete this product?");
}
function updateitem(name, category, orgprice, discprice, filename, id1) {
    $('.overlay1').css(
        'display', 'block'
    );
    $('.item-frm1').css('display', 'block');
    $('.item-frm1').css('transition', '0.4s');

    $('#itemname').attr("value", name);
    $('#itemcategory').attr("value", category);
    $('#itemorgprice').attr("value", orgprice);
    $('#itemfinalprice').attr("value", discprice);
    $('#up-img').attr('src', '../assets/imgs/'+filename);
    id = id1;
}

function update() {
  
    var image = $('#itemimages')[0].files[0];
    var name = $('#itemname').val();
    var category = $('#itemcategory').val();
    var orgprice = $('#itemorgprice').val();
    var discprice = $('#itemfinalprice').val();
   
    if (image === "" || name === "" || orgprice === "" || discprice === "") {
        if (image == "") {
            $('#itemimages').css(
                'border-color', 'red'
            )
        }
        if (name == "") {
            $('#itemname').css(
                'border-color', 'red'
            )
            $('#itemname::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#itemname').attr('placeholder', 'This field is required')
        }
        if (orgprice == "") {
            $('#itemorgprice').css(
                'border-color', 'red'
            )
            $('#itemorgprice::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#itemorgprice').attr('placeholder', 'This field is required')
        }
        if (discprice == "") {
            $('#itemorgprice').css(
                'border-color', 'red'
            )
            $('#itemorgprice::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#itemorgprice').attr('placeholder', 'This field is required')
        }
    }
    else {
        var form_data = new FormData();
        form_data.append('image', image);
        form_data.append('name', name);
        form_data.append('category', category);
        form_data.append('orgprice', orgprice);
        form_data.append('discprice', discprice);
        form_data.append('id', id);


        $.ajax({
            type: "POST",
            url: "../admin/controllers/updateitem.php",
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

function closelogin1() {
    $('.overlay1').css(
        'display', 'none'
    );
    $('.item-frm1').css('display', 'none');
    $('.item-frm1').css('transition', '0.4s')
}