
function adminvarify() {
    var username = $('#admin-username').val();
    var password = $('#admin-password').val();
    if (username === "" || password === "") {
        if (username == "") {
            $('#admin-username').css(
                'border-color', 'red'
            )
            $('#admin-username::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#admin-username').attr('placeholder', 'This field is required')
        }
        else {
            $('#admin-username').css({
                border: '2px soild black'
            })
        }
        if (password == "") {
            $('#admin-password').css(
                'border-color', 'red'
            )
            $('#admin-password::-webkit-input-placeholder').css(
                'color', 'red'
            )
            $('#admin-password').attr('placeholder', 'This field is required')

        }
        else {
            $('#admin-password').css({
                border: '2px soild black'
            })
        }
    }
    else {


        $.ajax({
            type: "POST",
            url: "../controllers/admindb.php",
            data: {
                username: username,
                password: password
            },
            success: function (response) {
                if (response == "success") {
                    window.location.href = 'admin.php'
                }
                else {
                    alert("Incorrect Credentials");
                }
            }
        })
    }
}





