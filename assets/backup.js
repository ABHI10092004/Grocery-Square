console.log("working");
console.log(isLoggedIn);
console.log(totprice);
var totalprice = 0;
let intprice = totprice.map(function (item) {
	return +item;
});

for (var i = 0; i < intprice.length; i++) {
	totalprice = totalprice + intprice[i];
}
console.log(totalprice);

// $(document).ready(function () {
if (isLoggedIn) {
	$(".login-logo").click(function () {
		$(".profile-box").toggle('active');
		$(".profile-box").css({
			display: 'block',
			transition: '0.4s'
		});
	});

} else {
	$(".login-logo").click(function () {
		$(".login-form").css({
			right: '0',
			transition: '0.4s'
		})
		$(".overlay").css({
			display: 'block'
		})
	});
}
$("#search-icon").click(function () {
	window.location.href = "search.php";
})
// login form



$(".close-login").click(function () {
	$(".login-form").css({
		right: '-110%',
		transition: '0.4s'
	})
	$(".overlay").css({
		display: 'none'
	})
})



$(".login-frm").click(function () {
	$(".signin").css({
		display: 'none'
	})
	$(".password-forgot").css({
		display: 'none'
	})
	$(".logins").css({
		display: 'block'
	})
})

$(".signup-frm").click(function () {
	$(".signin").css({
		display: 'block'
	})
	$(".password-forgot").css({
		display: 'none'
	})
	$(".logins").css({
		display: 'none'
	})
})
$(".login-frm-pass").click(function () {
	$(".signin").css({
		display: 'none'
	})
	$(".logins").css({
		display: 'block'
	})
	$(".password-forgot").css({
		display: 'none'
	})
})
$(".password-frm").click(function () {
	$(".signin").css({
		display: 'none'
	})
	$(".password-forgot").css({
		display: 'block'
	})
	$(".logins").css({
		display: 'none'
	})
});


// login form


// slider
let slideIndex = 0;


function showSlides() {
	let i;


	let slides = document.getElementsByClassName("image-sliderfade");


	let dots = document.getElementsByClassName("dot");

	for (i = 0; i < slides.length; i++) {

		slides[i].style.display = "none";
	}


	slideIndex++;


	if (slideIndex > slides.length) {
		slideIndex = 1;
	}

	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}

	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";


	setTimeout(showSlides, 3000);
}

// slider




$(".login-valid").click(function () {
	var username = $('.login-username').val();
	var password = $('.login-password').val();
	var id = $('.login-valid').data('id');
	if (username === "" || password === "") {
		if (username == "") {
			$('#login-username').css(
				'border-color', 'red'
			)
			$('#login-username::-webkit-input-placeholder').css(
				'color', 'red'
			)
			$('#login-username').attr('placeholder', 'This field is required')
		}
		else {
			$('#login-username').css({
				border: '2px soild black'
			})
		}
		if (password == "") {
			$('#login-password').css(
				'border-color', 'red'
			)
			$('#login-password::-webkit-input-placeholder').css(
				'color', 'red'
			)
			$('#login-password').attr('placeholder', 'This field is required')

		}
		else {
			$('#login-password').css({
				border: '2px soild black'
			})
		}
	}
	else {

		$.ajax({
			type: "POST",
			url: "controllers/login.php",
			data: {
				username: username,
				password: password,
				id: id
			},
			success: function (response) {
				if (response == "success") {
					$(".login-logo").off('click').on('click', function () {
						$(".profile-box").toggle('active');
						$(".profile-box").css({
							display: 'block',
							transition: '0.4s'
						});
					});
					$(".login-form").css({
						right: '-110%',
						transition: '0.4s'
					})
					$(".overlay").css({
						display: 'none'
					})

					window.location.reload();
				}
				else {
					// alert("Incorrect Credentials");
					console.log(response)
				}
			}
		})
	}
})
// });
$('#signup-phone').on('input', function () {
	$(this).val($(this).val().replace(/\D/g, ''));
});
function SigninForm(oldid) {
	var username = $("#signup-username").val();
	var email = $("#signup-email").val();
	var phone = $("#signup-phone").val();
	var password = $("#signup-password").val();

	if (username === "" || password === "" || email === "" || phone === "") {
		if (username == "") {
			$('#signup-username').css(
				'border-color', 'red'
			)
			$('#signup-username::-webkit-input-placeholder').css(
				'color', 'red'
			)
			$('#signup-username').attr('placeholder', 'This field is required')
		}

		if (email == "") {
			$('#signup-email').css(
				'border-color', 'red'
			)
			$('#signup-email::-webkit-input-placeholder').css(
				'color', 'red'
			)
			$('#signup-email').attr('placeholder', 'This field is required')
		}
		if (phone == "") {
			$('#signup-phone').css(
				'border-color', 'red'
			)
			$('#signup-phone::-webkit-input-placeholder').css(
				'color', 'red'
			)
			$('#signup-phone').attr('placeholder', 'This field is required')
		}

		if (password == "") {
			$('#signup-password').css(
				'border-color', 'red'
			)
			$('#signup-password::-webkit-input-placeholder').css(
				'color', 'red'
			)
			$('#signup-password').attr('placeholder', 'This field is required')

		}
	}
	else {



		$.ajax({
			type: "POST",
			url: "controllers/signup.php",
			data: {
				username: username,
				password: password,
				email: email,
				phone: phone,
				oldid: oldid
			},
			success: function (response) {

				console.log(response)
				window.location.reload()
			}
		})
	}
}
function cart() {
	$(".addcart").toggle('active');

	$('.addcart').css({
		display: 'block',
		transition: '0.1s'
	});

}
function loadCart() {
	$.ajax({
		url: 'controllers/cart_content.php',
		type: 'GET',
		success: function (response) {
			$('.addcart').html(response);
		}
	});
}



function red(element) {

	var $qtyDiv = $('#' + element);
	var currentQty = parseInt($qtyDiv.text());
	if (currentQty > 1) {
		$qtyDiv.text(currentQty - 1);
		// qtydiv = $qtyDiv.text();
	}
}
function inc(element) {

	var $qtyDiv = $('#' + element);
	var currentQty = parseInt($qtyDiv.text());
	$qtyDiv.text(currentQty + 1);
	// qtydiv = $qtyDiv.text();
}




function sendcart(itemname, discprice, image, sessionid, category, element) {

	console.log(itemname, discprice, image, sessionid, category, element);
	var $qtyDiv = $('#' + element);
	var qty = parseInt($qtyDiv.text());
	var form_data = new FormData();
	form_data.append('image', image);
	form_data.append('name', itemname);
	form_data.append('discprice', discprice);
	form_data.append('purchase_id', sessionid);
	form_data.append('category', category);
	form_data.append('qty', qty);
	$.ajax({
		type: "POST",
		url: "controllers/cart.php",
		data: form_data,
		contentType: false,
		processData: false,
		success: function (response) {
			var parts = [];
			var parts = response.split(',');
			var name = parts[0];
			var a = parts[1];
			console.log(name)
			console.log(a);
			$('.qty-' + name).html(a);
			loadCart();
			alertappear();
		}
	});
}
$('#price').html(totalprice);

function removecart(name, e) {
	console.log(name);
	var form_data = new FormData();
	form_data.append('id', e);
	form_data.append('name', name);
	$.ajax({
		type: "POST",
		url: "controllers/cart.php",
		data: form_data,
		contentType: false,
		processData: false,
		success: function (response) {
			var parts = [];
			var parts = response.split(',');
			var name = parts[0];
			var a = parts[1];
			console.log(name)
			console.log(a);
			$('.qty-' + name).html(a);
			console.log(response);
			loadCart();

		}
	});
}

function purchase() {
	if (isLoggedIn) {
		window.location.href = "payment.php";
	} else {
		$(".login-logo").click();
	}
}




function couponspply() {
	coupon = $('#couponid').val();
	console.log(coupon);
	console.log(couponarray);
	// var coupon = parseInt(coupon1.text());
	var check = couponarray.indexOf(coupon) !== -1
	if (coupon == "980KLJJK" && check) {
		if (totalprice > 1500) {
			var discprice = totalprice - (totalprice * 0.1);
			$('.Total').text("Total: \u20B9 " + Math.round(discprice))
		}
		else {
			$('#couponid').attr('placeholder', 'Coupon not applicable');
			$('#couponid').css('border', '2px solid red');
			coupon = "";
		}
	} else if (coupon == "233ERT56" && couponarray.includes(coupon)) {
		if (totalprice > 2000) {
			var discprice = totalprice - 250;
			$('.Total').text("Total: \u20B9 " + Math.round(discprice));
		} else {
			$('#couponid').attr('placeholder', 'Coupon not applicable');
			$('#couponid').css('border', '2px solid red');
			coupon = "";
		}
	} else if (coupon == "ADDCC323" && couponarray.includes(coupon)) {
		if (totalprice > 1500) {
			var discprice = totalprice - (totalprice * 0.2);
			$('.Total').text("Total: \u20B9 " + Math.round(discprice));
		} else {
			$('#couponid').attr('placeholder', 'Coupon not applicable');
			$('#couponid').css('border', '2px solid red');
			coupon = "";
		}
	} else if (coupon == "980K11JJ" && couponarray.includes(coupon)) {
		if (totalprice > 2500) {
			var discprice = totalprice - 500;
			$('.Total').text("Total: \u20B9 " + Math.round(discprice));
		} else {
			$('#couponid').attr('placeholder', 'Coupon not applicable');
			$('#couponid').css('border', '2px solid red');
			coupon = "";
		}
	} else {
		$('#couponid').attr('placeholder', 'Invalid Coupon');
		$('#couponid').css('border', '2px solid red');
		$('.Total').text("Total: \u20B9 " + totalprice);
		coupon = "";
	}
}
function pay(id) {

	var name = $("#pay-name").val();
	var address = $("#pay-address").val();
	var landmark = $("#pay-landmark").val();
	var city = $("#pay-city").val();
	var state = $("#pay-state").val();
	var email = $("#pay-email").val();
	var phone = $("#pay-phone").val();
	// console.log(phone);
	if (name === "" || email === "" || phone === "" || address === "" || landmark === "" || city === "" || state === "") {
		if (name == "") {
			$('#pay-name').css(
				'border-color', 'red'
			)
			$('#pay-name').attr('placeholder', 'This field is required')

		}
		if (email == "") {
			$('#pay-email').css(
				'border-color', 'red'
			)
			$('#pay-email').attr('placeholder', 'This field is required')

		}
		if (phone == "") {
			$('#pay-phone').css(
				'border-color', 'red'
			)
			$('#pay-phone').attr('placeholder', 'This field is required')

		}
		if (address == "") {
			$('#pay-address').css(
				'border-color', 'red'
			)
			$('#pay-address').attr('placeholder', 'This field is required')

		}
		if (landmark == "") {
			$('#pay-landmark').css(
				'border-color', 'red'
			)
			$('#pay-landmark').attr('placeholder', 'This field is required')

		}
		if (state == "") {
			$('#pay-state').css(
				'border-color', 'red'
			)
			$('#pay-state').attr('placeholder', 'This field is required')

		}
		if (city == "") {
			$('#pay-city').css(
				'border-color', 'red'
			)
			$('#pay-city').attr('placeholder', 'This field is required')

		}


	} else {



		var newaddress = address + landmark + city + state;
		console.log(newaddress);
		var form_data = new FormData();
		form_data.append('id', id);
		form_data.append('name', name);
		form_data.append('address', newaddress);
		form_data.append('email', email);
		form_data.append('phone', phone);
		if (coupon != "") {
			form_data.append('coupon', coupon);
		}

		$.ajax({
			type: "POST",
			url: "controllers/orders.php",
			data: form_data,
			contentType: false,
			processData: false,
			success: function (response) {
				console.log(response);
				window.location.href = "index.php";
			}
		});
	}
}
$('#sub-tot').html("&#8377 " + totalprice);
$('.Total').html("Total: " + "&#8377 " + totalprice);


function closelogin() {
	$('.overlay11').css(
		'display', 'none'
	);
	$('.item-frm11').css('display', 'none');
	$('.item-frm11').css('transition', '0.4s')
}

function updateprof(id) {
	$('.overlay11').css(
		'display', 'block'
	);
	$('.item-frm11').css('display', 'block');
	$('.item-frm11').css('transition', '0.4s');


}
function updateprof1(id) {
	var name = $("#name").val();
	var email = $("#email-pg").val();
	var phone = $("#ph-pg").val();

	if (name === "" || email === "" || phone === "") {
		if (name == "") {
			$('#name').css(
				'border-color', 'red'
			)
			$('#name').attr('placeholder', 'This field is required')

		}
		if (email == "") {
			$('#email-pg').css(
				'border-color', 'red'
			)
			$('#email-pg').attr('placeholder', 'This field is required')

		}
		if (phone == "") {
			$('#ph-pg').css(
				'border-color', 'red'
			)
			$('#ph-pg').attr('placeholder', 'This field is required')

		}


	} else {
		var form_data = new FormData();
		form_data.append('id', id);
		form_data.append('name', name);
		form_data.append('email', email);
		form_data.append('phone', phone);


		$.ajax({
			type: "POST",
			url: "controllers/profedit.php",
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
function updatepass() {
	$('.overlay12').css(
		'display', 'block'
	);
	$('.item-frm12').css('display', 'block');
	$('.item-frm12').css('transition', '0.4s');
}
function closepass() {
	$('.overlay12').css(
		'display', 'none'
	);
	$('.item-frm12').css('display', 'none');
	$('.item-frm12').css('transition', '0.4s')
}
function submitpass(id) {

	var oldpass = $("#old-pass").val();
	var newpass = $("#new-pass").val();
	if (oldpass === "" || newpass === "") {
		if (oldpass == "") {
			$('#old-pass').css(
				'border-color', 'red'
			)
			$('#old-pass').attr('placeholder', 'This field is required')

		}
		if (newpass == "") {
			$('#new-pass').css(
				'border-color', 'red'
			)
			$('#new-pass').attr('placeholder', 'This field is required')

		}


	} else {
		var form_data = new FormData();
		form_data.append('id', id);
		form_data.append('oldpass', oldpass);
		form_data.append('newpass', newpass);


		$.ajax({
			type: "POST",
			url: "controllers/changepass.php",
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
function loadProducts(category, id) {
	$('.dropbtn').html('Rupee Saving <i class="fa-solid fa-arrow-down-short-wide"></i>')
	$('.dropdown-content').css('width', '160px')
	var form_data = new FormData();
	form_data.append('category', category);
	form_data.append('id', id);
	$.ajax({
		url: 'controllers/filter1.php',
		type: 'POST',
		data: form_data,
		contentType: false,
		processData: false,
		success: function (data) {

			$('.cat-products').html(data);
		},
		error: function () {
			alert('Failed to load products.');
		}
	});
}
function loadProducts2(category, id) {
	$('.dropbtn').html('Low to High <i class="fa-solid fa-arrow-down-short-wide"></i>')
	$('.dropdown-content').css('width', '130px')
	var form_data = new FormData();
	form_data.append('category', category);
	form_data.append('id', id);
	$.ajax({
		url: 'controllers/filter2.php',
		type: 'POST',
		data: form_data,
		contentType: false,
		processData: false,
		success: function (data) {
			$('.cat-products').html(data);
		},
		error: function () {
			alert('Failed to load products.');
		}
	});
}
function reloadthis() {
	location.reload();
}
function categorydrop() {
	$('.dropdown_content1').css('display', 'flex');
	$('.dropdown_content1').css('transition', '0.4s');
	$('#icon_cat').css('display', 'inline');
	$('#icon_cat').css('transition', '0.4s');


	setTimeout(function () {
		$('.dropdown_content1').css('display', 'none');
		$('#icon_cat').css('display', 'none');
		$('#icon_cat').css('transition', '0.4s');
		$('.dropdown_content1').css('transition', '0.4s');
	}, 3600);
}


function alertappear() {
	$('.alert_addcart').css('display', 'flex');
	setTimeout(function () {
		$('.alert_addcart').css('display', 'none');
	}, 2900);
}